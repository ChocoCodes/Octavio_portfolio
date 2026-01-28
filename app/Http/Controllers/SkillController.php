<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function fetchAll() {
        $skills = Skill::all();
        return view('home', compact('skills'));
    }
}
