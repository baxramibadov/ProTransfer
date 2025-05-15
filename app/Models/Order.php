<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'start_location', 'end_location', 'car_type', 'pickup_time', 'status',
    ];
}
