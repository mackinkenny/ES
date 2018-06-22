<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function storemessage(Request $request)
    {
        if(!$request->name == null && !$request->contact == null && !$request->text == null) {
            $message = New Message();
            $message->name = $request->name;
            $message->contact = $request->contact;
            $message->text = $request->text;
            $message->user_id = Auth()->id();
            $message->save();
        }

        return back();
    }

    public function showall()
    {
        $messages = Message::all();

        return view('pages.admintask', ['messages' => $messages]);
    }
}
