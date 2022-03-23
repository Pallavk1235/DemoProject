<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door_material extends Model
{
    use HasFactory;

    protected $fillable =[
    	'door_material_name',
    	'door_material_details',
    	'door_material_stock'
    ];
}
