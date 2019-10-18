<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Requests\AdSaveRequest;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index(Request $request)
    {
        return Ad::filter($request->all())->get();
    }

    public function store(AdSaveRequest $request)
    {
        $ad = new Ad();
        $this->fillAd($ad, $request);
        return $ad;
    }

    public function update(int $ad, AdSaveRequest $request)
    {
        $ad = Ad::findOrFail($ad);
        $this->fillAd($ad, $request);
        return $ad;
    }

    public function destroy(int $ads)
    {
        Ad::destroy($ads);
    }

    public function show(int $ads)
    {
        return Ad::findOrFail($ads);
    }

    private function fillAd(Ad $ad, Request $request)
    {
        $ad->start_at = $request->input('start_at');
        $ad->end_at = $request->input('end_at');
        $ad->address = $request->input('address');
        $ad->description = $request->input('description');

        $ad->save();
    }
}
