@extends('layouts.content')

@section('title', 'Skills | John Octavio')

@section('content')
<div class="container-fluid d-flex flex-column align-items-center gap-5 py-3 px-4" style="width:90%;">
    {{-- About Me Section --}}
    <section class="d-flex flex-column gap-3 justify-content-center align-items-center w-100">
        <h1>About Me</h1>
        <p class="text-center tracking-wide text-muted w-100 w-lg-75 fs-5">{!! $description !!}</p>
    </section>
    {{-- Tech Stack Section --}}
    <section class="d-flex flex-column gap-4 gap-lg-5 justify-content-center align-items-center w-100">
        <div class="d-flex flex-column gap-1 text-center">
            <h1>What I Work With</h1>
            <p class="text-muted fs-5">My go-to stack for developing personal, academic, and experimental projects.</p>
        </div>
        <div class="col-lg-8">
            <div class="row g-3 justify-content-center">
                @foreach($skills as $skill)
                    <div class="col-6 col-md-4 col-lg-3">
                        <x-stack-tile :icon-name="$skill->icon_name" :proficiency="$skill->proficiency" :skill="$skill->skill" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Certificates Section --}}
    <section class="d-flex flex-column gap-5" style="width: 90%;">
        <div class="d-flex flex-column gap-3 text-center">
            <h1>Certificates</h1>
            <p class="text-muted fs-5">Certifications from platforms, programs, and trainings I have completed</p>
        </div>
        <div class="row g-5">
            @foreach($certificates as $certificate)
                <x-certificate :name="$certificate->name" :issuer="$certificate->issuer" :filename="$certificate->filename" :obtainedOn="$certificate->obtained_on" />
            @endforeach
        </div>
    </section>
</div>
@endsection