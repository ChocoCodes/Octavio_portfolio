<div class="d-flex flex-column gap-4">
    <h1 class="font-sora font-medium">{{ $title }}</h1>
    <div class="row g-4">
        <div class="col-lg-4 d-flex flex-column gap-1">
            <p class="w-100 fs-5">{{ $organization }}</p>
            <p class="fs-6 font-sora fw-semibold text-muted">{{ $startYear }} - {{ $endYear ?? 'Present' }}</p>
        </div>
        @if($level || $major) 
            <div class="col-lg-3 d-flex gap-4 flex-column">
                @if($level)
                    <div class="d-flex flex-column">
                        <p class="fs-4 text-slate ">{{ $level }}</p>
                        <p class="fs-6 fw-bold text-muted">Level</p>
                    </div>
                @endif
                @if($major)
                    <div class="d-flex flex-column">
                        <p class="fs-4 text-slate">{{ $major }}</p>
                        <p class="fs-6 fw-bold text-muted">Major</p>
                    </div>
                @endif  
            </div>
        @endif
        <div class="d-flex flex-column gap-2 col-lg-5">
            <p class="fs-4 fw-semibold">{{ $header }}</p>
            <ul class="d-flex flex-column gap-2 list-unstyled mb-0 w-100">
                @foreach ($highlightsList as $highlight)
                    <li class="p-0">{{ $highlight }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>