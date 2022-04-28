@extends('layouts/main')

@section('container')
<div class="row">
    <h1 class="h3 fw-normal text-center mt-3">Data Students</h1>
    <div class="col-md-12 d-flex justify-content-center">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" style="width: 100%" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('destroy'))
            <div class="alert alert-danger alert-dismissible fade show" style="width: 100%" role="alert">
                {{ session('destroy') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>
<div class="row mt-2 d-flex justify-content-center">
    @foreach ($students as $student)
    <div class="card mx-4 mt-4" style="width: 18rem;">
        <img src="storage/{{ $student->image }}" class="card-img-top" height="250">
        <div class="card-body text-center">
          <h5 class="card-title">{{ $student->name }}</h5>
          <p class="card-text">{{ $student->email }}</p>
          <a href="/detail/{{ $student->id }}" class="btn btn-primary">Detail</a>
          <a href="/update/{{ $student->id }}/edit" class="btn btn-success">Update</a>
            <form action="/delete/{{ $student->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are You Sure? im {{ $student->name }}')">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

<script>
    function copyText() {  
    var copyText = document.getElementById("text-copy");  
    copyText.select();  
    document.execCommand("copy");
}
</script>

@endsection