@extends('layouts.app')

@section('content')

<div class="container py-4" style="max-width: 480px">
    <h3>Login</h3>
    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @error('email') <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="remember" value="1">
            <label for="" class="form-check-label">Ingat Saya</label>
        </div>
        <button class="btn btn-primary">Log In</button>
    </form>
</div>

@endsection