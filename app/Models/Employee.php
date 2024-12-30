<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;
//    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'cin',
        'stuation', 
        'cnss',
        'email',
        'contact',
        'departement_id',
     ];
}
