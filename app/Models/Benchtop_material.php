<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benchtop_material extends Model
{
    use HasFactory;

    protected $fillable = [
    	'benchtop_material_name',
    	'benchtop_material_details',
    	'benchtop_material_stock'
    ];
}
