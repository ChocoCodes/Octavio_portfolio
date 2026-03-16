@extends('layouts.content')

@section('title', 'Add | John Octavio')

@section('content')
<div class="container d-flex flex-column py-1 gap-5" style="width: 90%;">
    <p>Add Project</p>
    <form action="{{ routes('projects.store') }}" method="POST" class="d-flex flex-column gap-4">
        @csrf 
        <div class="d-flex flex-column gap-1">
            <label for="title">Project Title</label>
            <input type="text" name="title" id="title" class="form-control" />
        </div>
        <div class="d-flex flex-column gap-1">
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" class="form-control">
        </div>
        <div class="d-flex flex-column gap-1">
            <label for="tech-stack">Tech Stack</label>
            <input type="text" name="tech-stack" id="tech-stack" class="form-control" />
        </div>

        <button>Add</button>
    </form>
</div>
@endsection