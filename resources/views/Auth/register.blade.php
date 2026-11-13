@extends('layouts.app')

@section('content')

<div class="container py-4" style="max-width: 560px;">
    <h3>Daftar Akun</h3>
    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
            @error('name') <div class="invalid-feedback">{{$message}}</div> 
            @enderror
        </div>

        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" class="form-control @error('email') is-invalid 
            @enderror" name="email" value="{{ old('email') }}">
            @error('email') <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <div class="mb-3">
            <label for="">Konfirmasi Password</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <button class="btn btn-primary">Daftar</button>
    </form>
</div>
@endsection