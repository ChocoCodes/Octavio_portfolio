<div class="d-flex gap-2">
    <a href="{{ url($url) }}" target="_blank" rel="noopener noreferrer">
        <img src="{{ asset("assets/svg/{$iconName}") }}" alt="Icon of {{$platform}}" style="width: 24px; height:24px;"/>
    </a>
    <span>{{ $username }}</span>
    <button onclick="copyToClipboard('{{  $username }}', this)">
        <i class="fa-regular fa-copy"></i>
    </button>
</div>