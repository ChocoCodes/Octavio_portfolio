@extends('layouts.content')

@section('title', 'Experience | John Octavio')

@section('content')
<div class="container py-3" style="width: 85%;">
    <div class="col-md-6">
        <p>EXPERIENCE</p>
        <div class="d-flex flex-column gap-4">
            @foreach($experience as $exp)
                <x-history-tile :title="$exp->role" :organization="$exp->organization" :highlights="$exp->contributions" :startYear="$exp->start" :endYear="$exp->end" />
            @endforeach
        </div>
    </div>
    <div class="col-md-6">
        <p>EDUCATION</p>
        <div class="d-flex flex-column gap-4">
            @foreach($education as $edu)
                <x-history-tile :title="$edu->degree" :organization="$edu->institution" :highlights="$edu->activities" :startYear="$edu->start" :endYear="$edu->end" :level="$edu->level" :major="$edu->major" :isEducation="true"/>
            @endforeach
        </div>
    </div>
</div>
@endsection