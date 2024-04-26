<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    protected $fillable = ['table_id', 'waiter_id', 'total'];

    use HasFactory;

    public function table()
    {
        return $this->belongsTo(tables::class);
    }

    public function waiter()
    {
        return $this->belongsTo(Waiter::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'bill_id', 'id');
    }
}
