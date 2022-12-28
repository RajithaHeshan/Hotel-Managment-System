<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'cus_name', 
        'contact_No',
        'email',
        'address',
        'book_ID',
        'room_ID',
        'checked_in',
        'checked_out'
    ];
   
    public $timestamps=false;

}

 

