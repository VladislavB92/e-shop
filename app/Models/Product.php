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
        'avalaible_quantity',
        'picture_url'
    ];

    public function deliveries()
    {
        return $this->hasMany(Delivery::class, 'size','size');
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function getStock(): string
    {
        return $this->avalaible_quantity;
    }

    public function getPicture(): string
    {
        if($this->picture_url == null) {
            return "";
        }
        return $this->picture_url;
    }
}
