<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Contact;

class ContactController extends Controller
{
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', ['contact' => $contact]);
    }
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
