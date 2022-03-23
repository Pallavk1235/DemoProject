<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cabinate_main_category;
use App\Models\Cabinate_type_category;

class Cabinate_subtype_category extends Model
{
    use HasFactory;

    protected $fillable = [
    	'cabinate_type_id',
    	'cabinate_subtype_name'
    ];

    public function products()
    {
    	return $this->belongsTo(Cabinate_type_category::class);
    }
}
