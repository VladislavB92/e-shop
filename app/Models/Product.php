<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Delivery;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'price',
        'free_shipping'
    ];

    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }
}
