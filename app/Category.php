<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'categories';
    protected $guarded = false;

    public function posts() 
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }
}
