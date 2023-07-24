<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function store(Post $post)
    {
//        validation
        \request()->validate([
            'body'=>'required',
        ]);
//        add comment to the given post
        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body'),
        ]);

        return back();
    }
}
