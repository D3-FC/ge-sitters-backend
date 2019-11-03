<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        return Client::filter($request->all())->get();
    }

    public function store(Request $request)
    {
        \Auth::user()->client()->create($request->only(''));
    }
}
