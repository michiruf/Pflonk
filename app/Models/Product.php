<?php

namespace App\Models;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Arr;

/**
 * 
 *
 * @property string $id
 * @property string $ean
 * @property string $name
 * @property string $price
 * @property string $image_path
 * @property string $additional_data
 * @property string $include_category_in_related_products
 * @property string $is_active
 * @property string $created_at
 * @property string $updated_at
 */
#[ObservedBy(ProductObserver::class)]
class Product extends Model
{
    use HasFactory;

    public $guarded = [];

    public $casts = [
        'id' => 'integer',
        'additional_data' => 'array',
        'include_category_in_related_products' => 'boolean',
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'integer',
    ];

    // TODO This is not used, but was existent using Lift, so we transformed this to the array to persist for later
    public $rules = [
        'ean' => 'required: The Product EAN cannot be empty',
        'name' => 'required: The Product name cannot be empty',
    ];

    /**
     * @return BelongsToMany<Category>
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    /**
     * @return HasMany<ProductCategory>
     */
    public function productCategories(): HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }

    /**
     * @return BelongsToMany<Product>
     */
    public function relatedProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_related_product');
    }

    /**
     * @return HasMany<ProductRelatedProduct>
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
