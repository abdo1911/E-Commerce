<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commint extends Model
{
    use HasFactory;

    protected $table = 'commints';

    protected $fillable = ['author','text'];
}
