<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function fetchAll() {
        $projects = Project::all();
        return view('pages.projects', compact('projects'));
    }
}
