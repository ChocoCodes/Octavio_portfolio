@extends('layouts.content')

@section('title', 'Experience | John Octavio')

@section('content')
<div class="container d-flex flex-column align-items-center gap-4 py-3" style="width: 85%;">
    <div class="d-flex flex-column gap-4">
        <p>EXPERIENCE</p>
        @foreach($experience as $exp)
            <x-history-tile :title="$exp->role" :organization="$exp->organization" :highlights="$exp->contributions" :startYear="$exp->start" :endYear="$exp->end" />
        @endforeach
    </div>
    <div class="d-flex flex-column gap-4">
        <p>EDUCATION</p>
        @foreach($education as $edu)
            <x-history-tile :title="$edu->degree" :organization="$edu->institution" :highlights="$edu->activities" :startYear="$exp->start" :endYear="$exp->end" :level="$edu->level" :major="$edu->major" :isEducation="true"/>
        @endforeach
    </div>
</div>
@endsection