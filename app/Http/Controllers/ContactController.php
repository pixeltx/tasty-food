<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required|string|max:255',
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($validatedData);

        return back()->with('success', 'Pesan kamu telah terkirim!');
    }
}
