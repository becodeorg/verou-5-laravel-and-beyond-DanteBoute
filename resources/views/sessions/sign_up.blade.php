@extends('layout')
@section('title')
Sign up
@endsection
@section('content')
                <section id="sign-up" class="section">
                    <h2>Sign Up</h2>
                    <form action="{{route("submitNewUser")}}" class="signup-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit">Sign Up</button>
                    </form>
                </section>
@endsection