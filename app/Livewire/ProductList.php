<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Livewire\Component;

class ProductList extends Component
{
    public string $textFilter = '';

    public ?int $categoryFilter = null;

    public function setCategoryFilter(?int $categoryId): void
    {
        if ($this->categoryFilter === $categoryId) {
            $this->categoryFilter = null;

            return;
        }

        $this->categoryFilter = $categoryId;
    }

    public function render(): View
    {
        $query = Product::query();

        $textFiler = str($this->textFilter)->trim();
        if ($textFiler->isNotEmpty()) {
            $query->whereLike('name', "%{$textFiler->toString()}%");
            //$query->orWhereLike('price', "%{$textFiler->toString()}%");
            // NOTE Maybe add the price as well
        }

        if ($this->categoryFilter) {
            $query->whereIn('id', Category::find($this->categoryFilter)->products()->get()->pluck('id'));
        }

        return view(
            'livewire.product-list',
            [
                'categories' => Category::all(),
                'products' => $query->get(),
            ]
        );
    }
}
