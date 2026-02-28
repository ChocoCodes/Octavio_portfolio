@extends('layouts.content')

@section('title', 'Home')

@section('content')
<div class="container d-flex flex-column align-items-center gap-4 py-3" style="width: 85%;">
    <img 
        src="{{ asset("assets/images/{$profile->image_filename}") }}" 
        alt="Image of{{ $profile->fname . ' ' . $profile->lname }}" 
        class="rounded-circle object-fit-cover"
        style="width: 220px; height: 220px;"
    >
    <div class="d-flex gap-2 flex-column text-center">
        <h1>{{ $profile->fname }} <br> {{ $profile->lname }}</h1>
        <h3>{{ $profile->title }}</h3>
        <p>{{ $profile->location }}</p>
        <p>{!! $profile->bio !!}</p>
        <div class="d-flex gap-4 mx-auto mx-md-0">
            <button class="rounded-pill">Resume</button>
            <button class="rounded-pill">Projects</button>
        </div>
    </div>
    <div class="d-flex flex-column gap-1">
        <h1>About Me</h1>
        <p>{{ $profile->description }}</p>
    </div>
</div>
@endsection