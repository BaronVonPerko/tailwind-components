@extends('layouts.app')

@section('content')
    <div class="container px-4 mx-auto text-center">

        <button class="btn btn-primary">
            Button
        </button>

        <button class="btn btn-normal">
            Normal
        </button>

        <button class="btn btn-danger">
            Danger
        </button>

    </div>

    <div class="container w-full max-w-xs mx-auto my-8">
        <form class="login-register-form">
            <div class="input-group">
                <label for="username">
                    Username
                </label>
                <input class="form-input" id="username" type="text" placeholder="Username">
            </div>
            <div class="input-group">
                <label for="password">
                    Password
                </label>
                <input class="form-input invalid" id="password" type="password" placeholder="******************">
                <p class="warning-text">Please choose a password.</p>
            </div>
            <div class="flex items-center justify-between">
                <button class="btn btn-primary" type="button">
                    Sign In
                </button>
                <a href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
        <p class="text-center text-grey text-xs">
            ©2017 Acme Corp. All rights reserved.
        </p>
    </div>

    <div class="w-full max-w-xs mx-auto mt-8">
        <form class="login-register-form">
            <div class="input-group">
                <label for="username">Username</label>
                <input class="form-input" type="text" id="username" placeholder="Username">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input class="form-input" type="email" id="email" placeholder="email@email.com">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input class="form-input" type="password" id="password" placeholder="********">
            </div>
            <div class="input-group mb-6">
                <label for="confirm-password">Confirm Password</label>
                <input class="form-input" type="password" id="confirm-password" placeholder="********">
            </div>
            <div class="input-group text-center">
                <div class="btn btn-primary">Register</div>
            </div>
            <div class="text-center">
                <a href="">
                    Already have an account?
                </a>
            </div>
        </form>
    </div>
@endsection
