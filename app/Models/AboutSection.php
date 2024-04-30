<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'heading','paragraph1','paragraph2', 'image',
    ];

}
