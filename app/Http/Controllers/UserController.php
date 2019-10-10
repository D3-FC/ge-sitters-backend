<?php

namespace App\Http\Controllers;

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
}
