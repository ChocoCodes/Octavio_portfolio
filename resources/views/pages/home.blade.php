@extends('layouts.content')

@section('title', 'Home | John Octavio')

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center gap-4 py-5" style="width: 90%;">
    <div class="d-flex gap-3 flex-column text-center align-items-center justify-content-center">
        <div class="d-flex flex-column gap-2">
            <div class="d-flex gap-3 justify-content-center align-items-center">
                <img 
                    src="{{ asset("assets/images/{$profile->image_filename}") }}" 
                    alt="Image of {{ $profile->fname . ' ' . $profile->lname }}" 
                    class="rounded-2 object-fit-cover"
                    style="width: 50px; height: 50px;"
                >
                <h1 class="fw-extrabold fs-4 fs-lg-1 fw-medium font-sora">{{ $profile->fname }} {{ $profile->lname }}</h1>
            </div>
            <p class="fs-5 fs-lg-4">{{ $profile->title }}</p>
        </div>
        <span class="d-inline-flex gap-1 align-items-center justify-content-center text-secondary fs-5 font-sora fw-semibold"><i class="fa-solid fa-location-dot"></i>{{ $profile->location }}</span>
        <p class="fs-5 tracking-wide text-slate">{!! $profile->bio !!}</p>
    </div>
    <div class="d-flex gap-4 mx-auto mx-md-0 fs-lg-5 fs-6 mt-4">
        <a class="btn-accent rounded-pill text-decoration-none px-4 py-2 bg-accent text-default text-center" href="https://drive.google.com/file/d/15RlLx6T4VmIiO0gVO_F0aS3TIgHjJUnI/view?usp=sharing" target="_blank" rel="noopener noreferrer">
            <i class="fa-solid fa-file-arrow-down"></i> Resume
        </a>
        <a class="rounded-pill invert text-decoration-none px-4 py-2 border text-black text-center" href="{{ url('/projects') }}" rel="noopener noreferrer">
            <i class="fa-solid fa-list"></i> Projects
        </a>
    </div>
</div>
@endsection