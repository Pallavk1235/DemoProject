<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessories_material extends Model
{
    use HasFactory;

    protected $fillable = [
    	'material_name',
    	'material_detail'
    ];
}
