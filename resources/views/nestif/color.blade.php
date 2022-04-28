@extends('layouts/main')

@section('container')

<div class="row mt-3 mb-5 mx-auto d-flex justify-content-center">
    <div class="col-md-6 rounded mt-5 text-center" style="background-color: rgb(240, 128, 151); color: white;">
        <h1 class="h2 fw-bolder mt-3 text-center">Genap Hijau | Ganjil Biru</h1>
        <style>
            .first, .second {
                width: 100px;
                height: 100px;
            }
        </style>
        <div class="box d-flex my-2" style="justify-content: space-around">
            <div class="first d-flex align-items-center rounded" style="background-color: {{ $first }};">
                <div class="h5 text-center fw-bold">Angka Pertama</div>
            </div>
            <div class="second d-flex align-items-center rounded" style="background-color: {{ $second }};">
                <div class="h5 text-center fw-bold">Angka Kedua</div>
            </div>
        </div>
        <a href="/nestif" class="card-link">Kembali</a>
    </div>
</div>

@endsection