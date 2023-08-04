<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Post\BaseController;

class DeletePostController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('post');
    }
}
