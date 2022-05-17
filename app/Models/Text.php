<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Models\User;

class Text extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'content', 'price', 'img_path', 'email', 'is_visible'
    ];
    protected $table = 'texts';

    public function scopeVisible($query){
        return $query->where('is_visible', 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
