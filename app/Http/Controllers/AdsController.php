<?php

namespace App\Http\Controllers;
use App\Ads;
use App\Http\Requests\AdsStoreRequest;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(Request $request)
    {
        return Ads::filter($request->all())->get();
    }

    public function store(AdsStoreRequest $request)
    {
        $ads = new Ads();
        $ads->start_at = $request->input('start_at');
        $ads->end_at = $request->input('end_at');
        $ads->address = $request->input('address');
        $ads->description = $request->input('description');

        $ads->save();
        return $ads;
    }

    public function update(int $ads, Request $request)
    {
        $ads = Ads::findOrFail($ads);
        $ads->start_at = $request->input('start_at');
        $ads->end_at = $request->input('end_at');
        $ads->address = $request->input('address');
        $ads->description = $request->input('description');

        $ads->save();
        return $ads;
    }

    public function destroy(int $ads)
    {
        Ads::destroy($ads);
    }

    public function show(int $ads)
    {
        return Ads::findOrFail($ads);
    }
}
