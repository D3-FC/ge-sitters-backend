<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class UserFavoriteController extends Controller
{
    public function index(Request $request)
    {
//        $userID = \Auth::id();
//        return Client::whereUserId($userID)->value('id');
        return \Auth::user()->favorite()->paginate();
    }

    public function store(Request $request)
    {
        //$client = new Client();
        //$userID = \Auth::id();
        //$clientId = Client::whereUserId($userID);
        //$client->favorite()->create($request->only(''));
        \Auth::user()->favorite()->create($request->only(''));

    }
}
