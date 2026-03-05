<a href="{{ url($url) }}" target="_blank" rel="noopener noreferrer" class="rounded-pill py-1 px-3 hover-fill hover-scale text-decoration-none text-slate d-flex gap-3 align-items-center" style="width: fit-content;">
    <img src="{{ asset("assets/svg/{$iconName}") }}" alt="Icon of {{$platform}}" style="width: 24px; height:24px;"/>
    <span class="fs-5">{{ $platform == "Email" ? $username : $platform }}</span>
</a>