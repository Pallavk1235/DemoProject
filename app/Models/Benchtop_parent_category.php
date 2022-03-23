<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benchtop_parent_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'benchtop_type_id',
    	'benchtop_parent_name',
    	'benchtop_parent_details',
    	'benchtop_parent_stock'
    ];
}
