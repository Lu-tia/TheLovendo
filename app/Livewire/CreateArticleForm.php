<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Validation\Rule;

class CreateArticleForm extends Component
{
    public $title;
    public $price;
    public $body;
    public $country;
    public $city;
    public $condition;
    public $category;
    
    protected function rules()
    {
        return [
            'title' => 'required|min:5',
            'price' => 'required|numeric',
            'body' => 'required',
            'country' => 'required',
            'city' => 'required',
            'condition' => ['required', Rule::in(['Usato', 'Nuovo'])],
            'category' => 'required|exists:categories,id',
        ];
    }
    
    protected function messages()
    {
        return [
            'title.required' => 'Inserisci un titolo valido',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri',
            'price.required' => 'Inserisci un prezzo',
            'price.numeric' => 'Il prezzo deve essere formato da numeri',
            'body.required' => 'Inserisci una descrizione',
            'country.required' => 'Inserisci una nazione',
            'city.required' => 'Inserisci una città',
            'condition.required' => "Inserisci lo stato dell'oggetto",
            'category.required' => 'Imposta una categoria',
            'category.exists' => 'La categoria selezionata non è valida',
        ];
    }
    
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
        
        session()->flash('success', 'Il tuo articolo è in fase di revisione, se rispetta le linee guida sarà pubblicato a breve!');
        return redirect('/');
    }
    
    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-article-form', compact('categories'));
    }
}
