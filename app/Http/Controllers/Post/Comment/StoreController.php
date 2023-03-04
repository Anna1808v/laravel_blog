<?php

namespace App\Http\Controllers\Post\Comment;

use App\Post;
use App\Comment;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        $comment->delete();
        return redirect()->route('personal.comment.index');
    }
}
