<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','price','category_id','description','mobile','logo'];

    function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
