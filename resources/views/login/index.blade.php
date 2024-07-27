@extends('user.layouts.main')

@section('container')

<div class="row d-flex justify-content-center" style="margin-top: 112px">
    <div class="col-md-8">
        <center>
            <div class="wrapper bg-white border border-3 border-black shadow-lg" style="margin-bottom: 80px;">
                <div class="form-box login">
                    <h2>Login</h2>

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="/login" method="post">
                        @csrf
                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" required>
                            <label>Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" name="password" id="password" required>
                            <label>Password</label>
                        </div>
                        <button type="submit" name="login" class="btn">Login</button>
                        <div class="login-register">
                            <p>Dont have an account? <a
                            href="#"
                            class="register-link">Register</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="form-box register">
                    <h2>Registration</h2>
                    <form action="/register" method="post">
                        @csrf
                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" class="@error('name') is-invalid @enderror" name="name" id="name" required>
                            <label>Nama</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="email"></ion-icon></span>
                            <input type="email" class="@error('email') is-invalid @enderror" name="email" id="email" required>
                            <label>Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password"  class="@error('password') is-invalid @enderror" name="password" id="password" required>
                            <label>Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn">Register</button>
                        <div class="login-register">
                            <p>Already have an account? <a
                            href="#"
                            class="login-link">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </div>
</div>

@endsection
