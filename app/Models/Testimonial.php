<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'restaurant_id',
        'image',
        'content',
        'rating'
    ];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}