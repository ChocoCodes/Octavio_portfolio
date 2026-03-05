<div class="d-flex flex-column gap-2 align-items-center bg-surface px-4 py-2 rounded-2 stack-card"> 
    <img src="{{ asset("assets/svg/$iconName") }}" alt="Icon of {{ $skill }}" style="width: 96px; height:96px;">
    <div class="d-flex flex-column text-center">
        <p class="fw-bold">{{ $skill }}</p>
        <p class="hover-white">{{ $proficiency }}</p>
    </div>
</div>