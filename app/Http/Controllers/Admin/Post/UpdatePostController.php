<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Service\PostService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UpdatePostController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post = $this->service->update($data, $post);
        return view('admin.post.show', compact('post'));
    }
}
