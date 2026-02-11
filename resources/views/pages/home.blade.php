@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <h2>My Skills</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Title</th>
                <th>Bio</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $profile->fname }}</td>
            </tr>
            <tr>
                <td>{{ $profile->lname }}</td>
            </tr>
            <tr>
                <td>{{ $profile->bio }}</td>
            </tr>
            <tr>
                <td>{{ $profile->title }}</td>
            </tr>
            <tr>
                <td>{{ $profile->description }}</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection