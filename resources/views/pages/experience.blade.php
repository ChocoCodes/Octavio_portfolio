@extends('layouts.content')

@section('title', 'Experience | John Octavio')

@section('content')
<div class="container d-flex flex-column py-1 gap-5" style="width: 90%;">
    <div class="col-md-6 d-flex flex-column gap-5 w-100">
        <p class="fs-1 divider-muted pb-2">EXPERIENCE</p>
        <div class="d-flex flex-column" style="gap: 6rem;">
            @foreach($experience as $exp)
                <x-history-tile :title="$exp->role" :organization="$exp->organization" :highlights="$exp->contributions" :startYear="$exp->start" :endYear="$exp->end" />
            @endforeach
        </div>
    </div>
    <div class="col-md-6 d-flex flex-column gap-5 w-100">
        <p class="fs-1 divider-muted pb-2">EDUCATION</p>
        <div class="d-flex flex-column" style="gap: 6rem;">
            @foreach($education as $edu)
                <x-history-tile :title="$edu->degree" :organization="$edu->institution" :highlights="$edu->activities" :startYear="$edu->start" :endYear="$edu->end" :level="$edu->level" :major="$edu->major" :isEducation="true"/>
            @endforeach
        </div>
    </div>
</div>
@endsection