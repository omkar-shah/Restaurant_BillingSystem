<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderItem extends Model
{
    protected $fillable = ['bill_id', 'dish_id', 'quantity', 'price'];

    use HasFactory;

    public function bill()
    {
        return $this->belongsTo(bills::class);
    }

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }
}
