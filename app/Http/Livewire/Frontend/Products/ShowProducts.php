<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ShowProducts extends Component
{
    public $categories;

    public $selectedCategory;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function selectCategory(Category $category)
    {
        $this->selectedCategory = $category;
    }

    public function showAll()
    {
        $this->selectedCategory = null;
    }

    public function render()
    {
        $products = Product::when($this->selectedCategory, fn ($query)
                => $query->where('category_id', $this->selectedCategory->id)
            )->get();

        return view('products.show-products', compact('products'));
    }
}
