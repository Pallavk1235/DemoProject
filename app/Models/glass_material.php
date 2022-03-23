<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class glass_material extends Model
{
    use HasFactory;

    protected $fillable = [
    	'glass_matrial_name',
    	'glass_matrial_details'
    ];
}
