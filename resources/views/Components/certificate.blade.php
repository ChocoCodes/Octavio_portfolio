<div class="d-flex flex-column gap-2">
    <img src="{{ asset("assets/images/certificates/$filename") }}" alt="{{ $name }} Certificate" class="img-fluid object-cover rounded">
    <div class="d-flex justify-content-between">
        <p>{{ $name }} ({{ $obtainedOn }})</p>
        <p>{{ $issuer }}</p>
    </div>
</div>