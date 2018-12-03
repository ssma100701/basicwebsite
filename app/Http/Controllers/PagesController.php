<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    public function getHome()
    {
        $messages = $this->getMessages();
        return view('home')->with('messages',$messages);
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getMessages()
    {
        $messages = Message::all();

        return $messages;
    }
}
