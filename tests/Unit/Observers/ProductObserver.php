<?php

use App\Models\Product;
use Illuminate\Support\Facades\File;

it('will delete images along with products', function () {
    $product = Product::factory()->create([
        'image_path' => '123.png',
    ]);

    File::shouldReceive('delete')
        ->once();

    $product->delete();
});

it('will not delete images when there is none', function () {
    $product = Product::factory()->create([
        'image_path' => null,
    ]);

    File::shouldReceive('delete')
        ->never();

    $product->delete();
});
