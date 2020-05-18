<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Hi, there!',
            'content' => 'Welcome. This is a test email. Hope you enjoy your stay with us'
        ];

        Mail::send('emails.mail-template', $data, function($msg) {
            $msg->to('hellojunreeve03@gmail.com', 'Jun Reeve')
                ->subject('Test Email');
        });
    }
}
