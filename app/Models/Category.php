<?php

namespace App\Models;

use App\Observers\CategoryObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy(CategoryObserver::class)]
class Category extends Model
{
    use HasFactory;

    public $guarded = [];

    public $casts = [
        'id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'integer',
    ];

    // TODO This is not used, but was existent using Lift, so we transformed this to the array to persist for later
    public $rules = [
        'name' => 'required: The Category name cannot be empty',
    ];

    /**
     * @return BelongsToMany<Product, Category>
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }

    /**
     * @return HasMany<ProductCategory, Category>
     */
    public function productCategories(): HasMany
    {
        return $this->hasMany(ProductCategory::class);
    }
}
