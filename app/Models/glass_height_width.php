<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class glass_height_width extends Model
{
    use HasFactory;

    protected $fillable = [
    	// 'glass_parent_id',
    	// 'glass_child_id',
    	'glass_height',
    	'glass_width'
    ];
}
