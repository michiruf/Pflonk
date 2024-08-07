<?php

namespace App\Models;

use App\Observers\CategoryObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Lift;

#[ObservedBy(CategoryObserver::class)]
class Category extends Model
{
    use HasFactory, Lift;

    //#[PrimaryKey]
    //public int $id;

    #[Rules(['required', 'string'], ['required' => 'The Category name cannot be empty'])]
    #[Fillable]
    public string $name;

    #[Fillable]
    public ?string $icon_path;

    #[Cast('datetime')]
    #[Fillable]
    public Carbon $created_at;

    #[Cast('datetime')]
    #[Fillable]
    public Carbon $updated_at;

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
