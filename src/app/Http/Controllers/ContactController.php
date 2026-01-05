<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['first-name', 'last-name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'categories', 'detail']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['first-name', 'last-name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'categories', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
