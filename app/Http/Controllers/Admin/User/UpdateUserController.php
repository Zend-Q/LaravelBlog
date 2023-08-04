<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Http\Requests\Admin\User\UpdateRequest as UserUpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function __invoke(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
