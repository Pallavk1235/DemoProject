<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benchtop_type extends Model
{
    use HasFactory;

    protected $fillable = [
    	'benchtop_type_name',
    	'benchtop_type_price',
    	'benchtop_type_details'
    ];
}
