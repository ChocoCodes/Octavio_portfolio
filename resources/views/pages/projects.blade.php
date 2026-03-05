@extends('layouts.content')

@section('title', 'Projects | John Octavio')

@section('content')
<section class="container-fluid d-flex flex-column align-items-center gap-4 py-3" style="width:90%;">
    <div class="d-flex flex-column gap-2 text-center">
        <h1>Featured Projects</h1>
        <p class="text-muted fs-5">Selected projects from my academic and personal work.</p>
    </div>
    <div class="row g-5">
        @foreach($projects as $project)
            <x-project-card :title="$project->title" :description="$project->description" :techStack="$project->tech_stack" :imageUrl="$project->image_url" :demoUrl="$project->demo_url" :githubUrl="$project->github_url" />
        @endforeach
    </div>
</section>
@endsection