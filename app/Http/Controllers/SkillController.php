<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Certificates;

class SkillController extends Controller
{
    public function fetchAll() {
        $skills = Skill::all();
        // Frameworks, Languages, Databases, or Tools
        $categories = $skills->pluck('category')->unique();
        $certificates = Certificates::orderBy('obtained_on', 'desc')->get();
        return view('pages.skills', compact('skills', 'certificates', 'categories'));
    }
}
