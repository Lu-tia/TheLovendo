<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticleForm extends Component
{
    #[Validate('required', message:'Inserisci un titolo')]
    #[Validate('min:5' , message: 'Il titolo deve essere almeno da 5 caratteri')]
    public $title;
    #[Validate('required', message:'Inserisci un prezzo')]
    #[Validate('numeric', message:'Il prezzo deve essere formato da numeri')]
    public $price;
    #[Validate('required',message:'Inserisci una descrizione')]
    public $body;
    #[Validate('required',message:'Inserisci una nazione')]
    public $country;
    #[Validate('required',message:'Inserisci una città')]
    public $city;
    #[Validate('required',message:"Inserisci lo stato dell'oggetto")]
    public $condition;
    #[Validate('required',message:'Imposta una categoria')]
    public $category;

    public function store()
    {
        $this->validate();
        Article::create([
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
        return $this->redirect('/');

    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-article-form',compact('categories'));
    }
}
