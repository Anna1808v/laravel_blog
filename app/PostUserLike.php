<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostUserLike extends Model
{
    protected $table = 'post_tags';
    protected $guarded = false;
}
