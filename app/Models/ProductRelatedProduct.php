<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * 
 *
 * @property string $id
 * @property string $product_id
 * @property string $related_id
 * @property string $created_at
 * @property string $updated_at
 */
class ProductRelatedProduct extends Pivot
{
    public $guarded = [];

    public $incrementing = true;

    public $casts = [
        'id' => 'integer',
        'product_id' => 'integer',
        'related_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
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
