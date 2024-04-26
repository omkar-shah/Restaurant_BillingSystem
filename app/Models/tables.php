<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tables extends Model
{
    protected $fillable = [
        'capacity',
    ];
    use HasFactory;
    public function bills()
    {
        return $this->hasMany(bills::class);
    }
}
