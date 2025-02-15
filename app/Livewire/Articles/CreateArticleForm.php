<?php

namespace App\Livewire\Articles;

use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Article;
use App\Models\Category;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    #[Validate('required', message:'Inserisci un titolo valido')]
    #[Validate('min:5' , message: 'Il titolo deve essere almeno da 5 caratteri')]
    #[Validate('max:50', message: 'Il titolo può avere al massimo 50 caratteri')]
    public $title;
    #[Validate('required', message:'Inserisci un prezzo')]
    #[Validate('numeric', message:'Il prezzo deve essere formato da numeri')]
    #[Validate('max:999999', message: 'Il prezzo può essere al massimo 999999')]
    public $price;
    #[Validate('required',message:'aggiungi una descrizione')]
    #[Validate('max:250', message: 'La descrizione può avere al massimo 250 caratteri')]
    public $body;
    #[Validate('required',message:'seleziona la nazione di provenienza')]
    public $country;
    #[Validate('required',message:"specifica lo stato dell'oggetto")]
    public $condition;
    #[Validate('required',message:'Scegli una categoria')]
    #[Validate('exists:categories,id',message:'Categoria inserita non valida')]
    public $category;
    public $article;
    public $images =[];
    public $temporary_images;

    protected function cleanForm()
    {
        $this->title='';
        $this->price='';
        $this->body='';
        $this->country='';
        $this->condition='';
        $this->images=[];
    }

    public function store()
    {
        $this->validate();
        $this->article=Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body,
            'country' => $this->country,
            'condition' => $this->condition,
            'user_id' => auth()->user()->id,
            'category_id' => $this->category,
        ]);

        if(count($this->images) > 0) {
            foreach($this->images as $image){
                $newFileName = "articles/{$this->article->id}";
                $newImage =  $this->article->images()->create(['path'=>$image->store($newFileName,'public')]);
                /* dispatch(new ResizeImage($newImage->path, 300 , 300));
                dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id)); */
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300 , 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectories(storage_path('/app/livewire-tmp'));
        }

        session()->flash('success','Articolo creato con successo');
        $this->cleanForm();
        return $this->redirect('/flashpage');

    }

    public function updatedTemporaryImages()
    {

        if(count($this->temporary_images) + count($this->images) > 6){
            throw ValidationException::withMessages(['temporary_images' => 'Hai caricato troppe immagini']);
        } else{

            if($this->validate(
                [
                'temporary_images.*' => 'image|max:1024',
                ])) {
                    foreach($this->temporary_images as $image){
                        $this->images[] = $image;
                    }
                }
        }
     }

    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        $nations = Http::get('https://restcountries.com/v3.1/all')->json();
        usort($nations, function($a, $b) {
            return strcmp($a['name']['common'], $b['name']['common']);
        });
        $categories = Category::all();
        return view('livewire.articles.create-article-form',compact('categories','nations'));
    }
}
