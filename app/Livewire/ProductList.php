<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public string $textFilter = '';

    public ?int $categoryFilter = null;

    public function render()
    {
        $query = Product::query();

        $textFiler = str($this->textFilter)->trim();
        if ($textFiler->isNotEmpty()) {
            $query->orWhereLike('name', $textFiler->toString());
            // NOTE Maybe add the price as well
        }

        if ($this->categoryFilter) {
            $query->whereIn('id', Category::find($this->categoryFilter)->products()->pluck('id'));
        }

        return view(
            "livewire.product-list",
            [
                'categories' => Category::all(),
                'products' => $query->get(),
            ]
        );
    }
}
