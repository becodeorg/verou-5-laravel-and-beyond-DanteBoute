@extends('layout');

@section('title')
Login
@endsection

@section('content')
<div class="container">
    <h1>Login</h1>
    <form class="login-form" action="{{ route('loginUser') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
@endsection