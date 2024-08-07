<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use WendellAdriel\Lift\Attributes\IgnoreProperties;
use WendellAdriel\Lift\Lift;

#[IgnoreProperties('fillable', 'pivotParent')]
class ProductCategory extends Pivot
{
    use Lift;

    //#[PrimaryKey]
    //public int $id;

    // This must be marked manually and also ignored by lift
    public $fillable = [
        'product_id',
        'category_id',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
