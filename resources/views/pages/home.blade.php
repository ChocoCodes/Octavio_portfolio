@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="container mt-4">
    <h2>Profile</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Title</th>
                <th>Bio</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $profile->fname }}</td>
                <td>{{ $profile->lname }}</td>
                <td>{{ $profile->bio }}</td>
                <td>{{ $profile->title }}</td>
                <td>{{ $profile->location }}</td>
            </tr>

        </tbody>
    </table>
</div>
@endsection