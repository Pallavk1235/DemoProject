<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steel_main_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'steel_name',
    	'steel_details',
    	'steel_stock',
    	'steel_price'
    ];
}
