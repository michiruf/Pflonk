<?php

namespace App\Observers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class CategoryObserver
{
    public function deleted(Category $category): void
    {
        if (! $category->icon_path) {
            return;
        }

        File::delete(storage_path($category->icon_path));
    }

    public function forceDeleted(Category $category): void
    {
        $this->deleted($category);
    }
}
