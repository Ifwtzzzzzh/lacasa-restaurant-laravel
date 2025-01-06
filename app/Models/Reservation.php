<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'restaurant_id',
        'restaurant_table_id',
        'start_date'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function menus() {
        return $this->hasMany(Menu::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
    public function restaurant_table() {
        return $this->belongsTo(RestaurantTable::class);
    }
    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }
}
