<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'is_feature',
    ];

    //資料表關聯
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
