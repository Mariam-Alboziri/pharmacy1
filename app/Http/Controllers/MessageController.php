<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
 public function index () {
        $messages = Message::all();

        return view('messages.index',compact('messages'));
    }

   public function show(Message $message) {
        //  $message = Message::findOrfail($message);

          return view('messages.show', compact('message'));
      }



  public  function store (Request $request){
        $request->validate([
            'c_fname' => 'required|string|min:3|max:255',
            'c_lname' => 'required|string|min:3|max:255',
            'c_email' => 'required|email',
            'c_subject' => 'required|string|min:3',
            'c_message' => 'required|string|min:3',
        ]);



        $data=$request->all();
        $message=new Message();

        $message->c_fname=$request->c_fname;
        $message->c_lname=$request->c_lname;
        $message->c_email=$request->c_email;
        $message->c_subject=$request->c_subject;
        $message->c_message=$request->c_message;

        $message->save();

        return redirect('/contact-us');


    }
}
