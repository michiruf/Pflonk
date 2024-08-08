<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->seedMandatoryData();

        if (app()->isLocal()) {
            $this->seedLocalData();
        }
    }

    private function seedMandatoryData(): void {}

    private function seedLocalData(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Category::factory()->create(['name' => 'Beer']);
        Category::factory()->create(['name' => 'Soft Drink']);
        Category::factory()->create(['name' => 'Wine']);
        Category::factory()->create(['name' => 'Garnish']);

        Product::factory()->create(['name' => 'Meckatzer Äss'])->productCategories()->create(['category_id' => 1]);
        tap(Product::factory()->create(['name' => 'Meckatzer Äss Alkoholfrei'])->productCategories())->create(['category_id' => 1])->create(['category_id' => 2]);
        Product::factory()->create(['name' => 'Lambrusco Perlwein'])->productCategories()->create(['category_id' => 3]);
        Product::factory()->create(['name' => 'Bierbankgarnitur'])->productCategories()->create(['category_id' => 4]);
        Product::factory()->create(['name' => 'Kühlschrank'])->productCategories()->create(['category_id' => 4]);
        Product::factory()->create(['name' => 'Kühlhänger'])->productCategories()->create(['category_id' => 4]);
        Product::factory()->create(['name' => 'Sonnenschirm'])->productCategories()->create(['category_id' => 4]);
        Product::factory()->create(['name' => 'Durchlaufkühler'])->productCategories()->create(['category_id' => 4]);
        Product::factory()->create(['name' => 'Aschenbecher'])->productCategories()->create(['category_id' => 4]);
        Product::factory()->create(['name' => 'Ausschankwagen'])->productCategories()->create(['category_id' => 4]);
    }
}
