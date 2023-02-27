<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Comment;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return view('personal.comment.index', compact('comments'));
    }
}
