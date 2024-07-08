<?php

namespace App\Http\Controllers;

use App\Events\NotifyEvent;
use Illuminate\Http\Request;

class NotifyController extends Controller
{
    public function notify(Request $request)
    {
        $data = ['message' => 'Hello from Azizdev!'];
        broadcast(new NotifyEvent($data));

        return response()->json($data);
    }
}
