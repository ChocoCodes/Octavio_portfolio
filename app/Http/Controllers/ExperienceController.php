<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function index() {
        $experience = Experience::all();
        $education = Education::all();
        return view('pages.experience', compact('education', 'experience'));
    }
}
