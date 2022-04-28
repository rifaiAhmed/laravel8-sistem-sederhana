@extends('layouts/main')

@section('container')

<div class="row mt-3 mb-5 mx-auto d-flex justify-content-center">
    <div class="col-md-6 rounded mt-5" style="background-color: rgb(240, 128, 151); color: white;">
        <style>
            .box {
                width: 30px;
                height: 30px;
                background-color: yellow;
                margin-left: 2px;
                margin-bottom: 2px;
                color: red;
            }
        </style>
        <a href="/nestloop" class="h5 fw-bolder mt-3 text-center" style="color: azure; text-decoration: none;">Kembali</a>
        <div class="samping d-flex justify-content-center flex-direction-row-reverse align-items-end">
            @for ($i = 1; $i <= $nada; $i++)
                <div class="mt-3">
                    @for ($j = 1; $j <= $i; $j++)
                    <div class="box d-flex justify-content-center align-items-center rounded">{{ $j }}</div>
                    @endfor
                    <br>
                </div>
            @endfor
        </div>
    </div>
</div>

@endsection