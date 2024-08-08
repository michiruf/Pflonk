<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use WendellAdriel\Lift\Attributes\IgnoreProperties;
use WendellAdriel\Lift\Attributes\PrimaryKey;
use WendellAdriel\Lift\Lift;

#[IgnoreProperties('fillable', 'pivotParent')]
class ProductRelatedProduct extends Pivot
{
    use Lift;

    //#[PrimaryKey]
    //public int $id;

    // This must be marked manually and also ignored by lift
    public $fillable = [
        'product_id',
        'related_id',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function related(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
