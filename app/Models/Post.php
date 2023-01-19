<?php

namespace App\Models;

use App\Models\Category;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // define the table
    protected $table = 'posts';

    // To know the coresspending Factory for this model
    protected static function newFactory()
    {
        return PostFactory::new();
    }

    protected $fillable = [
        'title',
        'content',
        'status',
        'category_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
