<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dine_in extends Model
{
    use HasFactory;
    protected $fillable = ['country','category','meal_code','menu','small_portion_price','medium_portion_price','large_portion_price'];
}
?>