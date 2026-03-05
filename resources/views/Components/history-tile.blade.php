<div class="d-flex flex-column gap-4">
    <h1>{{ $title }}</h1>
    <div class="row g-4">
        <div class="col-lg-4 d-flex flex-column gap-1">
            <p class="w-100 fs-5">{{ $organization }}</p>
            <p class="fs-6">{{ $startYear }} - {{ $endYear ?? 'Present' }}</p>
        </div>
        @if($level || $major) 
            <div class="col-lg-3 d-flex gap-4 flex-column">
                @if($level)
                    <div class="d-flex flex-column">
                        <p class="fs-4">{{ $level }}</p>
                        <p class="fs-6">Level</p>
                    </div>
                @endif
                @if($major)
                    <div class="d-flex flex-column">
                        <p class="fs-4">{{ $major }}</p>
                        <p class="fs-6">Major</p>
                    </div>
                @endif  
            </div>
        @endif
        <div class="d-flex flex-column gap-2 col-lg-5">
            <p class="fs-4">{{ $header }}</p>
            <ul class="d-flex flex-column gap-2 list-unstyled mb-0 w-100">
                @foreach ($highlightsList as $highlight)
                    <li class="p-0">{{ $highlight }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>