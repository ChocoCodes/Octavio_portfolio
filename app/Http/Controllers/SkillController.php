<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Certificates;
use App\Models\Profile;
class SkillController extends Controller
{
    public function fetchAll() {
        $skills = Skill::all();
        $description = Profile::value('description');
        $certificates = Certificates::orderBy('obtained_on', 'desc')->get();
        return view('pages.skills', compact('skills', 'certificates', 'description'));
    }
}
