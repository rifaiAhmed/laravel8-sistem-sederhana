@extends('layouts/main')

@section('container')

<div class="row mt-3 mb-5 mx-auto d-flex justify-content-center">
    <div class="col-md-6 rounded mt-5" style="background-color: rgb(240, 128, 151); color: white;">
        <h1 class="h5 fw-bolder mt-3 text-center">Hitung Berat Badan Ideal Anda</h1>
        <form action="/math" method="POST">
            @csrf
            <label for="tinggi" class="form-label">Tinggi Badan</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('tinggi')
                    is-invalid
                @enderror" name="tinggi" value="{{ old('tinggi') }}">
                <span class="btn btn-warning">Centimeter</span>
                @error('tinggi')
                <div class="invalid-feedback" style="color: yellow">{{ $message }}</div>
                @enderror
            </div>

            <label for="gender" class="form-label">Gender Anda</label>
            <div class="input-group mb-4">
                <select class="form-select" id="gender" name="gender" >
                  <option selected value="men">Pilih</option>
                  <option value="men">Laki-laki</option>
                  <option value="woman">Perempuan</option>
                </select>
                <button class="btn btn-warning" type="submit">Gender</button>
            </div>
            <button class="btn btn-warning mb-3" type="submit">Cek BB Ideal</button>
        </form>
    </div>
</div>

@endsection