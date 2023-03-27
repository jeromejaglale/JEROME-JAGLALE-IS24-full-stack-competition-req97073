<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected function developers(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => json_decode($value),
        );
    }

}
