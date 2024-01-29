<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('user.contact', compact('contacts'));
    }
    public function save()
    {
        $contacts = Contact::create([
            'name' => 'Abenezer Tigistu'
        ]);
    }
}
