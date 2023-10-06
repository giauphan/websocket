<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    //Add the below functions
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request, $room_id = 1)
    {
        $user = Auth::user();
        if ($user) {
            $message = $user->messages()->create([
                'message' => $request->input('message'),
                'room_id' => $room_id,
            ]);
            $usersend = User::find($user->id);
            broadcast(new MessageSent($usersend, $message));

            return ['status' => 'Message Sent!'];
        }

        return ['status' => 'User not authenticated'];
    }
}
