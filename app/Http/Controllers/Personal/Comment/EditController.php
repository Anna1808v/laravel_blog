<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Comment;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {
        return view('personal.comment.edit', compact('comment'));
    }
}
