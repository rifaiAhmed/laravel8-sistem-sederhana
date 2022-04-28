@extends('layouts/main')

@section('container')

<div class="row mt-3 mb-5 mx-auto d-flex justify-content-center">
    <div class="col-md-6 rounded mt-5 text-center" style="background-color: rgb(240, 128, 151); color: white;">
        <h1 class="h2 fw-bolder mt-3 text-center">Berat Badan Ideal Anda Adalah</h1>
        <h1 class="h1 fw-bolder mt-3 text-center" style="color: yellow">{{ $beratIdeal }} KG</h1>
        <a href="/math" class="card-link mb-3">Back</a>
    </div>
</div>

@endsection