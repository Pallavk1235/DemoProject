<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class glass_parent_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'glass_name',
        'glass_details',
        'glass_stock'
    ];
    public function maincategory()
    {
    	return $this->belongsTo(glass_parent_category::class); 
    }
}
