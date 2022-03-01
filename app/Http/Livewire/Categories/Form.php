<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;

class Form extends Component
{
    // Public properties
    public $category_id, $category_name;

    public function render()
    {
        return view('livewire.categories.form');
    }
}
