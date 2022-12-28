<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    use HasFactory;

    //following fields are fillable. therefor those fields can be potected from unwanted entries
    protected $fillable = ['roomNo', 'floorNo', 'roomType', 'noOfAdults', 'description', 'roomType', 'noOfBeds', 'maxNoOfChildren', 'maxNoOfAdults','price', 'roomStatus'];
}
