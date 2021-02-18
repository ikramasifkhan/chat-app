<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\Message;
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

    public function send(Request $request){
        $user = User::findOrFail(auth()->user()->id);
        event(new ChatEvent($request->message, $user));
        $message = new Message();
        $message->create([
            'user_id'=>auth()->user()->id,
            'message'=>$request->message,
        ]);
        return redirect()->back();
    }

    public function saveMessage($request){

    }
}
