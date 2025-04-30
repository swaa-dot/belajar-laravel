@extends('layout/aplikasi')

@section('konten')

<div class="w-50.center.border.rounded.px-3.py-3.mx-auto">
    <h1>Login bang</h1>
    <form action="/login/" method="POST">
     @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="passwird" class="form-control" name="password">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">login</button>
        </div>
    </form>  
</div>
@endsection