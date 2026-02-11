<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function fetchAll() {
        $profile = Profile::first();
        return view('pages.home', compact('profile'));
    }
}
