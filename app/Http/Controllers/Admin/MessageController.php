<?php

namespace App\Http\Controllers\Admin;
use App\Mail\ReplyMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function reply(Contact $message)
    {
        return view('admin.mails.reply', compact('message'));
    }


    public function sendReply(Request $request, Contact $message)
    {
        $request->validate([
            'subject' => 'required',
            'reply_message' => 'required',
        ]);

        Mail::to($message->email)
            ->send(new ReplyMail($message, $request->subject, $request->reply_message));

        return redirect()->route('mails.index')
            ->with('success', 'Reply sent successfully!');
    }



}
