<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexMessageRequest;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index(IndexMessageRequest $request)
    {
        return Message::with('user')
            ->filters($request->toArray())
            ->paginate(20);
    }

    public function store(StoreMessageRequest $request)
    {
        return Auth::user()->messages()->create([
            'content' => $request->content,
        ]);
    }
}
