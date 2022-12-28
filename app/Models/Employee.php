<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
     //following fields are fillable. therefore those fields can be potected from unwanted entries
    protected $fillable = [
        'EmployeeName', 
        'BirthDate',
        'Address',
        'Email',
        'ContactNo',
        'Position',
        'Salary',
        'LastPaidDate'
    ];
}
