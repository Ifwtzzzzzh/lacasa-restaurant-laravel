<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'code',
        'user_id',
        'phone_number',
        'reservation_id',
        'payment_method',
        'payment_status',
        'bonus_id',
        'total_amount',
        'transaction_date'
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
    public function bonus() {
        return $this->belongsTo(Bonus::class);
    }
}