@extends('layouts/main')

@section('container')

<div class="row mt-3 mb-5 mx-auto d-flex justify-content-center">
    <div class="col-md-6 rounded mt-5 text-center" style="background-color: rgb(240, 128, 151); color: white;">
        <h1 class="h4 fw-bolder mt-3 text-center">Presentase Kemunculan Karakter Input Pertama pada Input Kedua</h1>
        <h1 class="h1 fw-bolder mt-3 mb-3 text-center" style="color: yellow">{{ $presentase }} %</h1>
        <figcaption class="blockquote-footer">
            Karakter input pertama yang muncul pada input kedua
            @for ($i = 0; $i < count($arrayChar); $i++)
                {{ $arrayChar[$i] }}
            @endfor
        </figcaption>
        <a href="/other" class="card-link">Kembali</a>
    </div>
</div>

@endsection