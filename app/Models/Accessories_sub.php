<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories_sub extends Model
{
    use HasFactory;

    protected $fillable = [
    	'accessories_main_id',
    	'accessories_sub_name',
    	'accessories_sub_details',
    	'accessories_sub_stock',
    	'accessories_sub_price'
    ];
}
