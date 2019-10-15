<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function me(Request $request)
    {
        return $request->user();
    }

    public function index(Request $request)
    {
        return User::filter($request->all())->get();
    }

    public function store(UserStoreRequest $request)
    {
        $user = new User();
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->save();
        return $user;
    }

    public function update(int $user, Request $request)
    {
        $user = User::findOrFail($user);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->save();
        return $user;
    }

    public function destroy(int $user)
    {
        User::destroy($user);
    }

    public function destroyMany(Request $request)
    {
        if ($ids = $request->input('ids')) {
            User::destroy($ids);
        }
        if ($firstName = $request->input('name')) {
            User::where('first_name', 'LIKE', "%$firstName%")->delete();
        }
    }

    public function show(int $user)
    {
        return User::findOrFail($user);
    }

}
