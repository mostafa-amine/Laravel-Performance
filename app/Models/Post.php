<?php

namespace App\Models;

use App\Models\Category;
use Database\Factories\PostFactory;
use App\Models\Scopes\ArchivedScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
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

    // Using Local Scope
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    protected static function booted()
    {
        // Anyounumous scope
        static::addGlobalScope('ArchivedScope', function(Builder $builder){
            $builder->where('status', 'draft');
        });
    }
}
