<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductObserver
{
    public function deleted(Product $product): void
    {
        if (! $product->image_path) {
            return;
        }

        File::delete(storage_path($product->image_path));
    }

    public function forceDeleted(Product $product): void
    {
        $this->deleted($product);
    }
}
