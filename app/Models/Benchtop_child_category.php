<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benchtop_child_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'benchtop_parent_id',
    	'benchtop_child_name',
    	'benchtop_child_details',
    	'benchtop_child_stock'
    ];
}
