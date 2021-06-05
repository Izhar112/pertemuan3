<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table ='hotel';
    protected $fillable = ['tempat','nama hotel','bintang'];
}
