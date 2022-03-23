<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cabinate_main_category;
use App\Models\Cabinate_subtype_category;

class Cabinate_type_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cabinate_main_id',
    	'cabinate_type_name'
    ];

    public function productsubtype()
    {
        return $this->hasMany(Cabinate_subtype_category::class);
    }

    public function productmain()
    {
    	return $this->belongsTo(Cabinate_main_category::class);
    }
}
