@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="/css/admin/login.css">
@endsection

@section('content')
    <div class="container col-md-4 col-11 position-absolute top-50 start-50 translate-middle px-2 px-lg-5">
        <div class="buletan bg-light d-flex justify-content-center mx-auto">
            <i class="bi bi-person-fill align-self-center"></i>
        </div>
        <h1 class="fs-2 text-center text-white">Login Admin</h1>

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            
        <form action="" method="POST">
            @csrf
            <input type="email" class="form-control mx-auto w-100 @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <input type="password" class="form-control mt-2 mx-auto w-100 @error('password') is-invalid @enderror" placeholder="Password" name="password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            <button type="submit" name="submit" class="btn btn-light mt-3 mb-5 btn-outline-secondary w-100">LOGIN</button>
        </form>
    </div>
@endsection