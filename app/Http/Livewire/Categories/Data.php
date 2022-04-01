<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    // Setting up pagination trait
    use WithPagination;

    // Add categoriesList listener
    protected $listeners = ['categoriesList'];

    // Creating a categories list function
    public function categoriesList()
    {
        $categories = Category::paginate(10);
        return $categories;
    }

    // Remove a category
    public function delete(Category $category)
    {
        $category->delete();

        // Add notify flash message
        $this->dispatchBrowserEvent('notify-success', [
            'message' => 'Category has been removed successfully !'
        ]);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories.data', [
            'categories' => $this->categoriesList()
        ]);
    }
}
