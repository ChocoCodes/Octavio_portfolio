<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Profile;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        $profile = Profile::select('fname', 'lname', 'image_filename')->first();
        return view('pages.contact', compact('contacts', 'profile'));
    }
}
