<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categories';

    public $fillable = [
        'name',
        'description'
    ];

    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
