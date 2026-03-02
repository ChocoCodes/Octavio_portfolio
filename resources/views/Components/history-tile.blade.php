<div class="d-flex flex-column gap-3">
    <h1>{{ $title }}</h1>
    <div class="d-flex flex-column flex-lg-row gap-2 justify-content-between">
        <div class="d-flex flex-column">
            <p>{{ $organization }}</p>
            <p>{{ $startYear }} - {{ $endYear ?? 'Present' }}</p>
        </div>
        <div class="d-flex flex-column">
            @if($level)
                <p>Level: {{ $level }}</p>
            @endif
            @if($major)
                <p>Major: {{ $major }}</p>
            @endif
        </div>
        <div class="d-flex flex-column gap-2">
            <p>{{ $header }}</p>
            <ul class="d-flex flex-column">
                @foreach ($highlightsList as $highlight)
                    <li>{{ $highlight }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>