<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticleForm extends Component
{
    #[Validate('required', message:'Inserisci un titolo valido')]
    #[Validate('min:5' , message: 'Il titolo deve essere almeno da 5 caratteri')]
    #[Validate('max:50', message: 'Il titolo può avere al massimo 50 caratteri')]
    public $title;
    #[Validate('required', message:'Inserisci un prezzo')]
    #[Validate('numeric', message:'Il prezzo deve essere formato da numeri')]
    #[Validate('max:999999', message: 'Il prezzo può essere al massimo 999999')]
    public $price;
    #[Validate('required',message:'aggiungi una descrizione')]
    #[Validate('max:500', message: 'La descrizione può avere al massimo 500 caratteri')]
    public $body;
    #[Validate('required',message:'seleziona la nazione di provenienza')]
    public $country;
    #[Validate('required',message:'Inserisci la città in cui ti trovi')]
    public $city;
    #[Validate('required',message:"specifica lo stato dell'oggetto")]
    public $condition;
    #[Validate('required',message:'Scegli una categoria')]
    public $category;
    public $article;

    public function store()
    {
        $this->validate();
        $this->article=Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body,
            'country' => $this->country,
            'city' => $this->city,
            'condition' => $this->condition,
            'user_id' => auth()->user()->id,
            'category_id' => $this->category,
        ]);
        session()->flash('success','Articolo creato con successo');
        return $this->redirect('/articoli/profilo/crea-articolo/flashpage');

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
