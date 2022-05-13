<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
        $msg = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'contenido' => 'required|min:3'
        ]);

        Mail::to('gonzacade@gmail.com')->queue(new MessageReceived($msg));

        return $msg;
    }
}