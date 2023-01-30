<?php

namespace App\Http\Controllers\Admin\Post;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\Post\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        if(!empty($data['preview_image'])){
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }
        
        if(!empty($data['main_image'])){
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }
        $post->update($data);
        $post->tags()->sync($tagIds);

        return view('admin.post.show', compact('post'));
    }
}
