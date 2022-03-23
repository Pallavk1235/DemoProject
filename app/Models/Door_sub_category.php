<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door_sub_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'door_parent_id',
    	'door_sub_name',
    	'door_sub_details',
    	'door_sub_stock'
    ];
}
