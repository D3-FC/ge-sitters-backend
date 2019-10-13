<?php

namespace App\Http\Controllers;
use App\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(Request $request)
    {
        return Ads::filter($request->all())->get();
    }
}
