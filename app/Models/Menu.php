<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'restaurant_id',
        'name',
        'category_id',
        'image',
        'price'
    ];

    public function restaurant() {
        return $this->hasMany(Restaurant::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
    public function order() {
        return $this->belongsTo(Order::class);
    }
}
