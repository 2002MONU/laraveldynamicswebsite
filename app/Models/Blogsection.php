<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blogsection extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 'image','status','slug' ,'description',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($blogsection) {
            $blogsection->slug = Str::slug($blogsection->title);
        });
    }
}
