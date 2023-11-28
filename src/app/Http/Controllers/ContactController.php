<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return $contact;
    }
}
