<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Door_finishing extends Model
{
    use HasFactory;

    protected $fillable = [
    	'finshing_name',
    	'finshing_details',
    	'finshing_price'
    ];
}
