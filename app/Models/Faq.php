<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title', 'heading', 'paragraph','faqq1','faqans1','faqq2','faqans3','faqq3','faqans3',
    ];
}
