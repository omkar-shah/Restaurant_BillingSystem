<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    protected $fillable = [
        'name',
        'price',
    ];
    use HasFactory;

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
