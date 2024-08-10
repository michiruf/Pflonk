<?php

namespace App\Models;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Lift;

#[ObservedBy(ProductObserver::class)]
//#[BelongsToManyAnnotation(Category::class, 'categories', 'product_category')]
//#[HasManyAnnotation(ProductCategory::class, 'productCategories')]
//#[BelongsToManyAnnotation(Product::class, 'relatedProducts')]
//#[HasManyAnnotation(ProductRelatedProduct::class, 'productRelatedProducts')]
class Product extends Model
{
    use HasFactory, Lift;

    //#[PrimaryKey]
    //public int $id;

    #[Rules(['required', 'string'], ['required' => 'The Product EAN cannot be empty'])]
    #[Fillable]
    public string $ean;

    #[Rules(['required', 'string'], ['required' => 'The Product name cannot be empty'])]
    #[Fillable]
    public string $name;

    #[Fillable]
    public ?string $price;

    #[Fillable]
    public ?string $image_path;

    #[Cast('array')]
    #[Fillable]
    public ?array $additional_data;

    #[Cast('boolean')]
    #[Fillable]
    public bool $include_category_in_related_products;

    #[Cast('boolean')]
    #[Fillable]
    public bool $is_active;

    #[Cast('datetime')]
    public Carbon $created_at;

    #[Cast('datetime')]
    public Carbon $updated_at;

    /**
     * @return BelongsToMany<Category, Product>
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    /**
     * @return HasMany<ProductCategory, Product>
     */
    public function productCategories(): HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }

    /**
     * @return BelongsToMany<Category, Product>
     */
    public function relatedProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_related_product');
    }

    /**
     * @return HasMany<ProductCategory, Product>
     */
    public function productRelatedProducts(): HasMany
    {
        return $this->hasMany(ProductRelatedProduct::class);
    }

    public function hasAdditionalData(?string $index): bool
    {
        if (! $index) {
            return ! empty($this->additional_data);
        }

        return Arr::accessible($this->additional_data) && Arr::exists($this->additional_data, $index);
    }

    public function getAdditionalData(?string $index, ?string $default = null): mixed
    {
        if (! $index) {
            return $this->additional_data;
        }

        return Arr::get($this->additional_data, $index, $default);
    }
}
