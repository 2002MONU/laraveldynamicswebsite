<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceFeature extends Model
{
    use HasFactory;
    protected $fillable = [
         'title', 'heading', 'image', 'paragraph', 'point1', 'point2', 'point3', 'point4','status','link' ,
            ];
}
