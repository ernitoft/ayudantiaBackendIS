<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'creator',
        'price',
        'year',
        'isEnable',
        'type',
        'ISBN'
    ];

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
