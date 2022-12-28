<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fault extends Model
{
    use HasFactory;
    protected $fillable = ['item_No','item_Name','reason','description','supplier_Name'];
    public $timestamps  =  true;
    
}
