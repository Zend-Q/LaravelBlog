<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\User\StoreRequest as UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreUserController extends Controller
{
    public function __invoke(UserStoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect() -> route('user');
    }
}
