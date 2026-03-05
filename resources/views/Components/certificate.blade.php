<div class="col-12 col-lg-6 d-flex flex-column gap-2 align-items-center justify-content-between">
    <div class="d-flex flex-column justify-content-between w-100 text-muted">
        <p>{{ $obtainedOn }}</p>
        <p class="fs-3 text-slate">{{ $name }}</p>
        <p class="fs-5">{{ $issuer }}</p>
    </div>
    <img src="{{ asset("assets/images/certificates/$filename") }}" alt="{{ $name }} Certificate" class="img-fluid object-fit-cover rounded-2 shadow" style="aspect-ratio: 3/2;"> 
</div>