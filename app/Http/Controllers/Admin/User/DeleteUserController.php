<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function __invoke(User $user)
    {
        $user->delete();
        return redirect()->route('user');
    }
}
