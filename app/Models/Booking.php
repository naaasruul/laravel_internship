<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
class Booking extends Model
{
    //
    protected $fillable = [
        'room_id', 
        'customerName',
        'check_in_date',
        'check_in_out',
    ];

    public function room(){
        return $this->belongsTo(Room::class);
    }
}
