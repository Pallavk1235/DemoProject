<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door_main_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'door_main_name',
    	'door_main_details',
    	'door_main_stock'
    ];
}
