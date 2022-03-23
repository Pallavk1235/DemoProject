<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door_color extends Model
{
    use HasFactory;

    protected $fillable = [
    	'color_name',
    	'color_details',
    	'color_price'
    ];
}
