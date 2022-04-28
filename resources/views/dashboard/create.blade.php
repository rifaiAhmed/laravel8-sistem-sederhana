@extends('layouts.main')

@section('container')
    <div class="row">
        <h3 class="text-center mt-3">Form Add Student</h3>
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="/create" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="mb-1">
                  <label for="name" class="form-label">Name Student</label>
                  <input type="text" class="form-control @error('name')
                      is-invalid
                  @enderror" id="name" name="name" value="{{ old('name') }}">

                  @error('name')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-1">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email')
                      is-invalid
                  @enderror" id="email" name="email" value="{{ old('email') }}">

                  @error('email')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control @error('address')
                      is-invalid
                  @enderror" id="address" name="address" value="{{ old('address') }}">

                  @error('address')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-2">
                  <label for="image" class="form-label">Image</label>
                  <img class="img-preview img-fluid">
                  <input type="file" class="form-control @error('image')
                      is-invalid
                  @enderror" id="image" name="image" onchange="previewImage()">

                  @error('image')
                      <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Data</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>

    <script>

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new fileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection