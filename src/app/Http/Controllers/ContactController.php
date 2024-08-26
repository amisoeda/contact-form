<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'pass']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'pass']);
        Contact::create($contact);
        return view('thanks');
    }
}