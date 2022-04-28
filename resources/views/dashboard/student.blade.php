@extends('layouts/main')

@section('container')
<div class="row">
    <h3 class="text-center mt-3">Form Add Student</h3>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <form action="/update/{{ $student->id }}/edit" method="POST" enctype="multipart/form-data">
        @method('put')
          @csrf
            <div class="mb-1">
              <label for="name" class="form-label">Name Student</label>
              <input type="text" class="form-control @error('name')
                  is-invalid
              @enderror" id="name" name="name" value="{{ old('name', $student->name) }}">

              @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-1">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email')
                  is-invalid
              @enderror" id="email" name="email" value="{{ old('email', $student->email) }}">

              @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-2">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control @error('address')
                  is-invalid
              @enderror" id="address" name="address" value="{{ old('address', $student->address) }}">

              @error('address')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-2">
                <img src="{{ asset('storage/'.$student->image) }}" class="card-img-top" height="250">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control @error('image')
                  is-invalid
              @enderror" id="image" name="image"">

              @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <input type="hidden" name="oldImage" value="{{ $student->image }}">
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>

@endsection