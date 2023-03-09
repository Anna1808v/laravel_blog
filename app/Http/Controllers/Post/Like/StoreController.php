<?php
namespace App\Http\Controllers\Post\Like;

use App\Post;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        //toggle - если пост лайкнут, то снимает лайк, если нет - то ставит
        auth()->user()->likedPosts()->toggle($post->id);

        return redirect()->back();
    }
}
