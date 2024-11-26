<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bookings';

    protected $guarded = [];

    public function foodsBooking()
    {
        return $this->hasMany(BookingFood::class);
    }

    public function seatsBooking()
    {
        return $this->hasMany(BookingSeat::class);
    }

    public function totalSeatsPrice()
    {
        return $this->seatsBooking->sum(function ($seatBooking) {
            $seat = $seatBooking->seat;
            $basePrice = $seat->room->base_price;
            $bonusPrice = $seat->seatType->bonus_price;
            return $basePrice + $bonusPrice;
        });
    }

    public function totalFoodsPrice()
    {
        return $this->foodsBooking->sum(function ($foodBooking) {
            return $foodBooking->quantity + $foodBooking->food->price;
        });
    }

    public function totalPrice(){
        return $this->totalSeatsPrice() + $this->totalFoodsPrice();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cinema(){
        return $this->belongsTo(Cinema::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function showtime()
    {
        return $this->belongsTo(ShowTime::class);
    }
}
