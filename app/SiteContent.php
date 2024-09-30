<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'page',
        'user_benefits',
        'lawyer_benefits',
        'how_it_works',
        'blog_title',
        'blog_content',
        'blog_image',
    ];
}
