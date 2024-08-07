<?php

use App\Models\Category;
use Illuminate\Support\Facades\File;

it('will delete images along with products', function () {
    $category = Category::factory()->create([
        'icon_path' => '123.png',
    ]);

    File::shouldReceive('delete')
        ->once();

    $category->delete();
});

it('will not delete images when there is none', function () {
    $category = Category::factory()->create([
        'icon_path' => null,
    ]);

    File::shouldReceive('delete')
        ->never();

    $category->delete();
});
