<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageStoreRequest;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return Message::filter($request->all())->get();
    }

    public function store(MessageStoreRequest $request)
    {
        $message = new Message();
        $message->description = $request->input('description');

        $message->save();
        return $message;
    }
}
