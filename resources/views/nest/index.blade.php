@extends('layouts/main')

@section('container')

<div class="row mt-3 mb-5 mx-auto d-flex justify-content-center">
    <div class="col-md-6 rounded mt-5" style="background-color: rgb(240, 128, 151); color: white;">
        <h1 class="h5 fw-bolder mt-3 text-center">Tangga Nada</h1>
        <form action="/nestloop" method="POST">
            @csrf
            <div class="input-group mb-4">
                <select class="form-select" id="tangga" name="tangga" >
                  <option selected value="1">Pilih Tinggi Nada</option>
                  @for ($i = 1; $i <= count($nada); $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
                <button class="btn btn-warning" type="submit">Buat Tangga</button>
            </div>
        </form>
    </div>
</div>

@endsection