<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'price', 'email', 'is_visible'
    ];
    protected $table = 'texts';
}
