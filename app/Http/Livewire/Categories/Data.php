<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Data extends Component
{

    // Creating a categories list function
    public function categoriesList()
    {
        $categories = Category::all();
        return $categories;
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories.data', [
            'categories' => $this->categoriesList()
        ]);
    }
}
