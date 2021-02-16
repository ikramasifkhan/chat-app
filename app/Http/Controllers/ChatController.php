<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('chat');
    }

    public function send(){
        $user = User::findOrFail(auth()->user()->id);
        $message = 'Hello hai';
        event(new ChatEvent($message, $user));
    }
}
