<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['item_No','item_Name','item_Type','supplier_Name','unit_Price','quantity','description'];
    public $timestamps  =  true;

}
