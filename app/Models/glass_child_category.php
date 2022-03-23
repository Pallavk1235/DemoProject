<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class glass_child_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'glass_parent_id',
        'glass_child_name',
        'glass_child_details',
        'glass_child_stock'
    ];

    public function subcategory(){
    	return $this->hasMany(glass_child_category::class); 
    }
}
