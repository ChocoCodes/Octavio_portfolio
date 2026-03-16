<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('pages.projects', compact('projects'));
    }

    // Create
    public function create() {
        return view('pages.project_create');
    }

    // Edit
    public function edit(Project $project) {
        return view('pages.project_edit', compact('project'));
    }

    // Helper validator
    public function validates(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'tech_stack' => 'required',
        ]);
        return $validated;
    }

    // Store
    public function store(Request $request) {
        $validated = $this->validates($request);
        Project::create($validated);
        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    // Edit
    public function update(Request $request, Project $project) {
        $validated = $this->validates($request);
        $project->update($validated);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }
}
