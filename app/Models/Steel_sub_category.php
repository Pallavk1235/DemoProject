<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steel_sub_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'steel_main_id',
    	'steel_sub_name',
    	'steel_sub_details',
    	'steel_sub_stock',
    	'steel_sub_price'
    ];
}
