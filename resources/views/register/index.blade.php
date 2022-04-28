@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <form action="/register" method="POST">
                @csrf
                <div class="images text-center">
                    <img class="mb-1 mt-3" src="images/r-logo.png" alt="" height="57">
                </div>
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name')
                    is-invalid
                    @enderror" placeholder="your name" name="name" id="name" value="{{ old('name') }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="floatingInput" >Name</label>
                </div>

                <div class="form-floating">
                    <input type="text" class="form-control @error('username')
                        is-invalid
                    @enderror" placeholder="your full name" name="username" id="username" value="{{ old('username') }}" required>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="floatingInput" >Username</label>
                </div>

                <div class="form-floating">
                    <input type="email" class="form-control @error('email')
                        is-invalid
                    @enderror" placeholder="name@example.com" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-bottom @error('password')
                        is-invalid
                    @enderror" id="password" placeholder="Password" name="password" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-danger" type="submit">Register</button>
            </form>
            <small>Already Registered? <a href="/login">Login</a></small>
        </main>
    </div>
</div>
@endsection