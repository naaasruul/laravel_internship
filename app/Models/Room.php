<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Hotel;
use App\Models\Booking;
class Room extends Model
{
    //
      //
      protected $fillable = [
        'hotel_id', 
        'room_type',
        'price',
    ];

    public function hotel(){
        return $this->BelongsTo(Hotel::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
