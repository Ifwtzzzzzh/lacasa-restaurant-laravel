<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'user_id',
        'menu_id',
        'restaurant_table_id',
        'restaurant_id',
        'start_date'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function menu() {
        return $this->hasMany(Menu::class);
    }
    public function restaurantTable() {
        return $this->hasMany(RestaurantTable::class);
    }
    public function restaurant() {
        return $this->belongsTo(User::class);
    }
}