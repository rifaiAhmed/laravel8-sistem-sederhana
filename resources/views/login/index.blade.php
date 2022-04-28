@extends('layouts.main')

@section('container')
    <main class="form-signin">
        <form action="/login" method="POST">
            @csrf
            <div class="images text-center">
                <img class="mb-1" src="images/r-logo.png" alt="" height="57">
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Login Here</h1>
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email')
                    is-invalid
                @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" autofocus required>
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
        </form>
        <small>Not Register? <a href="/register">Register Now</a></small>
    </main>
@endsection