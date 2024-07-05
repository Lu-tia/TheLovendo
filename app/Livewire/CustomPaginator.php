<?php

namespace App\Livewire;

use Illuminate\Pagination\Paginator;
use Livewire\Component;

class CustomPaginator extends Component
{
   

    public function render()
    {
        return view('livewire.custom-paginator');
    }
}
