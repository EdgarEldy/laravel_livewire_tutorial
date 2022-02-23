<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Data extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories.data',[
            'categories' => $categories
        ]);
    }
}
