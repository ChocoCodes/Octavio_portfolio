<div class="col-12 col-lg-6 d-flex flex-column gap-3 align-items-center justify-content-center py-4">
    <img 
        src="{{ asset("assets/images/projects/$imageUrl") }}" 
        alt="{{ $title }} Project" 
        class="img-fluid object-fit-cover shadow rounded-2"
        style="aspect-ratio: 16/9;"
    >
    <div class="d-flex flex-column gap-1 px-2 w-100">
        <div class="d-flex justify-content-between align-items-center">
            <p class="fs-3 fw-semibold text-slate">{{ $title }}</p>
            <div class="d-flex gap-2">
                @if ($demoUrl)
                    <a href="{{ $demoUrl }}" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-arrow-up-right-from-square fs-4"></i>
                    </a>
                @endif
                <a href="{{ $githubUrl }}" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-github fs-4"></i>
                </a>
            </div>
        </div>
        <span class="text-muted opacity-75" style="font-size: 14px;">{{ $techStack }}</span>
        <p class="text-muted opacity-75 fs-6">{{ $description }}</p>
    </div>
</div>