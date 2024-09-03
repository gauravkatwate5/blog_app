<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_info extends Model
{
    use HasFactory;

    protected $table = "comments";
    protected $fillable = [
        'blog_id',
        'user_id',
        'user_name',
        'comment',
    ];

    // Define the relationship with the blog
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
