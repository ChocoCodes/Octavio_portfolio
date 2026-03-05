<a href="{{ url($url) }}" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-slate d-flex gap-3 align-items-center">
    <img src="{{ asset("assets/svg/{$iconName}") }}" alt="Icon of {{$platform}}" style="width: 24px; height:24px;"/>
    <span class="fs-5">{{ $platform == "Email" ? $username : $platform }}</span>
</a>