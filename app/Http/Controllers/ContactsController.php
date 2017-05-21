<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));

        Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($message));

        flashy('Nous vous répondrons dans les plus brefs délais!');

        return redirect()->route('root_path');
    }
}
