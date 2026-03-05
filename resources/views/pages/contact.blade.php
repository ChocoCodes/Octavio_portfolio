@extends('layouts.content')

@section('title', 'Contact | John Octavio')

@section('content')
<div class="container d-flex flex-column flex-lg-row gap-lg-0 align-items-center text-slate justify-content-between py-3 px-0" style="width: 90%; gap: 6rem;">
    <div class="w-100 d-flex flex-column gap-2">
        @foreach($contacts as $contact)
            <x-contact-tile :icon-name="$contact->icon_name" :platform="$contact->platform" :username="$contact->username" :url="$contact->url"/>
        @endforeach
    </div>
    <div class="d-flex flex-column gap-3 align-items-end w-100">
        <div class="d-flex gap-2 align-items-end">
            <img         
                src="{{ asset("assets/images/{$profile->image_filename}") }}" 
                alt="Image of {{ $profile->fname . ' ' . $profile->lname }}" 
                class="rounded object-fit-cover"
                style="width:40px; height:40px;"
            >
            <p class="fs-5">{{ $profile->fname . ' ' . $profile->lname }}</p>
        </div>
        <div class="d-flex flex-column text-end text-slate">
            <h1 class="fs-2">Have a vision in mind?</h1>
            <h1 class="text-accent fs-1">Let's turn it into something real.</h1>
            <div class="d-flex gap-2 align-items-center justify-content-end mt-3">
                <span class="bg-accent rounded-circle" style="width:12px; height:12px;"></span>
                <p class="fs-5">Open to Work</p>
            </div>
        </div>
    </div>
</div>
@endsection