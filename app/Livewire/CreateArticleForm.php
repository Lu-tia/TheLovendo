<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticleForm extends Component
{
    #[Validate('required|min:5')]
    public $title;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required')]
    public $body;
    #[Validate('required')]
    public $country;
    #[Validate('required')]
    public $city;
    #[Validate('required')]
    public $condition;
    #[Validate('required')]
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
        return view('livewire.create-article-form');
    }
}
