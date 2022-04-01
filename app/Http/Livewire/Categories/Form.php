<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Form extends Component
{
    // Public properties
    public $category_id;
    public $category_name;

    // Define rules
    protected $rules;

    // Add editCategory event listener
    protected $listeners = ['editCategory'];

    public function hydrate()
    {
        $this->rules = [
            'category_name' => ['required'],
        ];
    }

    // Creating closeModal function and call reset function
    public function closeModal()
    {
        $this->reset();
    }

    // Creating submit function for creting or updating a category
    public function submit()
    {
        // Validate inputs
        $this->validate();

        $category = $this->category_id ? Category::find($this->category_id) : new Category();

        $category->category_name = $this->category_name;
        $category->save();

        // Reset inputs
        $this->reset();

        $this->dispatchBrowserEvent('close-modal', [
            'modalname' => "modalFormCategory"
        ]);

        $this->dispatchBrowserEvent('notify-success', [
            'message' => "Category has been saved successfully !"
        ]);

        $this->emit('categoriesList');

    }

    // Get category to update in the modal
    public function editCategory(Category $category)
    {
        $this->category_id = $category->id;
        $this->category_name = $category->category_name;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function render()
    {
        return view('livewire.categories.form');
    }
}
