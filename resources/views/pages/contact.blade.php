@extends('layouts.content')

@section('title', 'Contact | John Octavio')

@section('content')
<div class="container d-flex flex-column align-items-center gap-4 py-3" style="width: 85%;">
    <div class="d-flex gap-3">
        <img         
            src="{{ asset("assets/images/{$profile->image_filename}") }}" 
            alt="Image of {{ $profile->fname . ' ' . $profile->lname }}" 
            class="rounded-circle object-fit-cover"
            style="width:80px; height:80px;"
        >
        <div class="d-flex flex-column">
            <p>{{ $profile->fname . ' ' . $profile->lname }}</p>
            <div class="d-flex gap-2">
                <div class="rounded-full bg-green" style="width: 8px; height: 8px;"></div>
                <p>Available</p>
            </div>
        </div>
    </div>
    <h1 class="text-center">Have a vision in mind? <span>Let's turn it into something real.</span></h1>

    <div class="d-flex flex-column gap-2">
        @foreach($contacts as $contact)
            <x-contact-tile :icon-name="$contact->icon_name" :platform="$contact->platform" :username="$contact->username" :url="$contact->url"/>
        @endforeach
    </div>
</div>
@endsection