<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'image',
        'name',
        'slug',
        'city_id',
        'address',
        'rating',
        'description'
    ];

    public function city() {
        return $this->belongsTo(City::class);
    }
    public function menus() {
        return $this->hasMany(Menu::class);
    }
    public function bonus() {
        return $this->hasMany(Bonus::class);
    }
    public function reservations() {
        return $this->belongsTo(Reservation::class);
    }
    public function restaurant_tables() {
        return $this->hasMany(RestaurantTable::class);
    }
    public function testimonials() {
        return $this->belongsTo(Testimonial::class);
    }
}
