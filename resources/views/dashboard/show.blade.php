@extends('layouts/main')

@section('container')

<div class="row">
    <h1 class="h3 fw-normal text-center mt-3">Detail Student</h1>
</div>

<div class="row mt-2 d-flex justify-content-center">
    <div class="card mx-4 mt-4" style="width: 18rem;">
        <img src="{{ asset('storage/'.$student->image) }}" class="card-img-top" height="250">
        <div class="card-body text-center">
          <h5 class="card-title">{{ $student->name }}</h5>
          <p class="card-text">{{ $student->email }}</p>
          <p class="card-text">{{ $student->address }}</p>
            <a href="/landing" class="card-link">Back to Students</a>
        </div>
    </div>
</div>

@endsection