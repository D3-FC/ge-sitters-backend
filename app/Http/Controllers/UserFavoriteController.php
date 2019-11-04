<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
    public function index(Request $request)
    {
        $userId = \Auth::user()->id;
        return \Auth::user()->userFavorite()->where('from_id',$userId)->get();
    }

    public function store(Request $request)
    {
        \Auth::user()->userFavorite()->create($request->only(''));
    }
}
