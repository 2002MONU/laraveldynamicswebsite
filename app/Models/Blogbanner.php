<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogbanner extends Model
{
    use HasFactory;
    
    protected $fillable = [
        // 'title', 'heading',
         'image','heading',
    ];
}
