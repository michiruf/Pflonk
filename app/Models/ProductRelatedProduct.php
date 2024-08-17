<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

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
