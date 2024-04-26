<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class waiter extends Model
{
    protected $fillable = [
        'name',

    ];
    use HasFactory;

    public function bills()
    {
        return $this->hasMany(bills::class);
    }
}
