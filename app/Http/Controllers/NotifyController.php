<?php

namespace App\Http\Controllers;

use App\Events\NotifyEvent;
use App\Events\PrivateEvent;
use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function notify(Request $request)
    {
        $data = ['message' => 'Hello, World 2!'];
        broadcast(new NotifyEvent($data));

        return response()->json($data);
    }

    public function notifyPrivate()
    {
        $data = [
            'message' => 'Hello from a private channel!',
            'user_id' => 1,
        ];
        broadcast(new PrivateEvent($data));

        return response()->json($data);
    }
}
