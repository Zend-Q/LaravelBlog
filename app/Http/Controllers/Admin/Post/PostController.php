<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Post\BaseController;

class PostController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }
}
