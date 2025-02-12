<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RestaurantTable extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'restaurant_id',
        'name',
        'capacity',
        'is_available'
    ];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }
    public function reservation() {
        return $this->hasMany(Reservation::class);
    }
}
