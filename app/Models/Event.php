<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable=[

        
        'eventType',
        'title',
        'fname',
       'lname',
        'nic',
        'contact',
        'email',
        'no',
        'street',
        'city',
        'charges',
        'notes',
        'eventday',
        'time',
        'hallNumber',
        'participantNo'
    ];
}
