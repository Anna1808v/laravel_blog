<?php

namespace App\Http\Controllers\Post;

use App\Post;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id )
            ->get()
            ->take(3);
        // $postTags = $post->tag->title;
        // dd($postTags);
        return view('post.show', compact('post', 'date', 'relatedPosts'));
    }
}
