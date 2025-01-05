<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'image',
        'name',
        'city_id',
        'address',
        'rating',
        'description',
        'menu_id',
        'bonus_id'
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }
    public function menu() {
        return $this->hasMany(Menu::class);
    }
    public function bonus() {
        return $this->belongsTo(Bonus::class);
    }
    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
    public function restaurantTable() {
        return $this->belongsTo(RestaurantTable::class);
    }
    public function testimonial() {
        return $this->belongsTo(Testimonial::class);
    }
}