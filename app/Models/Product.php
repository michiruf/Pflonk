<?php

namespace App\Models;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Fillable;
use WendellAdriel\Lift\Attributes\PrimaryKey;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Lift;

#[ObservedBy(ProductObserver::class)]
class Product extends Model
{
    use HasFactory, Lift;

    #[PrimaryKey]
    public int $id;

    #[Rules(['required', 'string'], ['required' => 'The Product EAN cannot be empty'])]
    #[Fillable]
    public string $ean;

    #[Rules(['required', 'string'], ['required' => 'The Product name cannot be empty'])]
    #[Fillable]
    public string $name;

    #[Fillable]
    public ?string $image_path;

    #[Cast('array')]
    #[Fillable]
    public ?array $additional_data;

    #[Cast('boolean')]
    #[Fillable]
    public bool $is_active;

    #[Cast('datetime')]
    public Carbon $created_at;

    #[Cast('datetime')]
    public Carbon $updated_at;
}
