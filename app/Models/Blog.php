<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Table name
    protected $table = "blogs";

    // primary key
    protected $primaryKey = "id";

    protected $fillable = [
        'blog_title',
        'blog_img',
        'content',
        'views',
    ];

    // Define the relationship with comments
    public function comments()
    {
        return $this->hasMany(Comment_info::class);
    }
}
