<div class="d-flex flex-column gap-3">
    <img 
        src="{{ asset("assets/images/projects/$imageUrl") }}" 
        alt="{{ $title }} Project" 
        class="img-fluid object-cover"
    >
    <div class="d-flex flex-column gap-1 px-2">
        <div class="d-flex justify-content-between">
            <p>{{ $title }}</p>
            <div class="d-flex gap-2">
                @if ($demoUrl)
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </a>
                @endif
                <a href="http://" rel="noopener noreferrer">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
        </div>
        <span>{{ $techStack }}</span>
        <p>{{ $description }}</p>
    </div>
</div>