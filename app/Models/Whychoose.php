<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whychoose extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'heading', 'paragraph','image1','image2','image3','yoexp','sacustomer','couwsur',
    ];

}
