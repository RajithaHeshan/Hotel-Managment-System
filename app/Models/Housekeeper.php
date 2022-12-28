<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housekeeper extends Model
{
    use HasFactory;

    protected $primaryKey = 'housekeeper_id';

    protected $fillable = [
        'first_Name',
        'last_Name',
        'nic_Number',
        'house_Number',
        'street',
        'city',
        'hired_Agency_Name',
        'gender',
        'contact_Number'
    ];
}
