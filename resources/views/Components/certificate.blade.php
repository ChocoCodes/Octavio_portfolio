<div class="col-12 col-lg-6 d-flex flex-column gap-2">
    <div class="d-flex flex-column justify-content-between">
        <p>{{ $obtainedOn }}</p>
        <div class="d-flex justify-content-between">
            <p>{{ $name }}</p>
            <p>{{ $issuer }}</p>
        </div>
    </div>
    <img src="{{ asset("assets/images/certificates/$filename") }}" alt="{{ $name }} Certificate" class="img-fluid object-fit-cover rounded" style="aspect-ratio: 3/2;"> 
</div>