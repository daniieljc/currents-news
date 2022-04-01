<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsLetter extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'author', 'link', 'excerpt', 'summary', 'rank', 'topic', 'country', 'language', 'media', '_id'];
}