<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsServiceStoreRequest;
use App\NewsService;
use Illuminate\Http\Request;

class NewServiceController extends Controller
{
    public function index(Request $request)
    {
        return NewsService::filter($request->all())->paginate($request->input('per_page'));
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
