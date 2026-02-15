@extends('layouts.content')

@section('title', 'Project')

@section('content')
<div class="container mt-4">
    <h2>My Skills</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Tech Stack</th>
                <th>Demo</th>
                <th>Github</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <td>{{ $project->title }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->tech_stack }}</td>
                <td>
                    <a href={{ $project->demo_url }} target="_blank">Demo</a>
                </td>
                <td>
                    <a href={{ $project->github_url }} target="_blank">Github</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection