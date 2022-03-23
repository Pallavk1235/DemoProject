<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cabinate_type_category;
use App\Models\Cabinate_subtype_category;

class Cabinate_main_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cabinate_main_name'
    ];

    public function producttype()
    {
        return $this->hasMany(Cabinate_type_category::class);
    }
}
