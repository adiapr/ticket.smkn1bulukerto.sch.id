<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'agent_name',
        'agent_code',
        'start_city',
        'end_city',
        'start_location',
        'end_location',
        'start_date',
        'end_date', 
        'start_time',
        'end_time',
        'order_date',
        'order_time',
        'chair_no',
        'price'
    ];
}
