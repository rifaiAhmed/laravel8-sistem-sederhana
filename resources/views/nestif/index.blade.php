@extends('layouts/main')

@section('container')

<div class="row mt-3 mb-5 mx-auto d-flex justify-content-center">
    <div class="col-md-6 rounded mt-5 text-center" style="background-color: rgb(240, 128, 151); color: white;">
        <h1 class="h2 fw-bolder mt-3 text-center">Cek Angka Genap Atau Ganjil</h1>
        <form action="/nestif" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('first')
                    is-invalid
                @enderror" placeholder="Angka Pertama" name="first" value="{{ old('first') }}">
                @error('first')
                <div class="invalid-feedback" style="color: yellow">{{ $message }}</div>
                @enderror
                <span class="input-group-text">@</span>
                <input type="text" class="form-control @error('second')
                    is-invalid
                @enderror" placeholder="Angka Kedua" name="second" value="{{ old('second') }}">
                @error('second')
                <div class="invalid-feedback" style="color: yellow">{{ $message }}</div>
                @enderror
            </div>
            <figcaption class="blockquote-footer">
                Jika Angka Genap Kotak Hijau Jika Ganjil Kotak Biru
            </figcaption>
            <button class="btn btn-warning mb-3" type="submit">Cek Angka</button>
        </form>
    </div>
</div>

@endsection