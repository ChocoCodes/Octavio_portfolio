@extends('layouts.content')

@section('title', 'Skills | John Octavio')

@section('content')
<div class="container-fluid d-flex flex-column align-items-center gap-5 py-3 px-4" style="width:90%;">
    {{-- Skills Section --}}
    <section class="d-flex flex-column gap-3">
        <div class="d-flex flex-column gap-2 text-center">
            <h1>What I Work With</h1>
            <p>My go-to stack for developing personal, academic, and experimental projects.</p>
        </div>
        <div class="d-flex gap-2 flex-wrap justify-content-center">
            <x-category-label category="All" />
            @foreach($categories as $category)
                <x-category-label :category="$category" />
            @endforeach
        </div>
        <div class="d-flex gap-3 flex-wrap justify-content-center">
            @foreach($skills as $skill)
                <x-stack-tile :icon-name="$skill->icon_name" :proficiency="$skill->proficiency" :skill="$skill->skill" />
            @endforeach
        </div>
    </section>
    <section class="d-flex flex-column gap-3">
        <div class="d-flex flex-column gap-2 text-center">
            <h1>Certificates</h1>
            <p>Certifications from platforms, programs, and trainings I have completed</p>
        </div>
        <div class="d-flex flex-wrap gap-4">
            @foreach($certificates as $certificate)
                <x-certificate :name="$certificate->name" :issuer="$certificate->issuer" :filename="$certificate->filename" :obtainedOn="$certificate->obtained_on" />
            @endforeach
        </div>
    </section>
</div>
@endsection