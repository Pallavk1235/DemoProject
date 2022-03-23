<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories_main extends Model
{
    use HasFactory;

    protected $fillable = [
    	'accessories_name',
    	'accessories_details',
    	'accessories_stock',
    	'accessories_price'
    ];
}
