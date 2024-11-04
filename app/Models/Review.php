<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'rating'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
