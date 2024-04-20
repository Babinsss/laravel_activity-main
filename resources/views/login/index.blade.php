@extends('layout.main')

@section('content')
<style>
    .login {
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        padding: 30px;
        max-width: 400px;
        margin: auto;
    }

    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .text-danger {
        margin-top: 5px;
        font-size: 12px;
    }

    .form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
    }

    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-check-input:checked {
        background-color: #007bff;
        border-color: #007bff;
    }

    .form-check-input:checked:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .form-check-input:checked:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .login {
            padding: 20px;
            max-width: 100%;
        }
    }
</style>

<div class="container">
    <div class="login">
        <h1 class="text-center mb-4">User Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username" required>
                @error('username')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password" required>
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember-me-checkbox">
                <label class="form-check-label" for="remember-me-checkbox">Remember Me</label>
                <input type="hidden" name="remember_me" id="remember-me" value="0">
            </div>
            <div class="text-center">
                <button class="btn btn-primary btn-lg mt-3" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('remember-me-checkbox').addEventListener('change', function() {
        document.getElementById('remember-me').value = this.checked ? 1 : 0;
    });
</script>

@endsection
