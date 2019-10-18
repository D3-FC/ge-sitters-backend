<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsServiceStoreRequest;
use App\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewServiceController extends Controller
{
    public function index(Request $request)
    {
       // return NewsService::paginate(3);
        return NewsService::filter($request->all())->get();
    }

    public function store(NewsServiceStoreRequest $request)
    {
        $newService = new NewsService();
        $newService->description = $request->input("description");

        $newService->save();
        return $newService;
    }

    public function update(int $newService, NewsServiceStoreRequest $request)
    {
        $newService = NewsService::findOrFail($newService);
        $newService->description = $request->input("description");

        $newService->save();
        return $newService;
    }
}
