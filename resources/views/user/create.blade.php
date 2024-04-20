@extends('layout.main')
@extends('layout.nav')
<title>Add a user</title>
@section('content')
<style>
    .container {
        padding: 5%;
    }

    .title {
        padding-bottom: 20px
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 8px;
        border-color: #ced4da;
    }

    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .btn {
        border-radius: 8px;
    }

    .error-message {
        color: #dc3545;
        font-size: 0.875rem;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 3%;
        }

        .col-md-3,
        .col-md-2,
        .col-md-4,
        .col-md-7 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .btn {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>

<div class="container">
    <h2 class="title">Add User</h2>
    <form class="row g-4" action="/user/store" method="POST">
        @csrf
        {{-- First Name --}}
        <div class="col-md-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{old('first_name')}}" required>
            @error ('first_name')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Middle Name --}}
        <div class="col-md-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{old('middle_name')}}">
        </div>
        {{-- Last Name --}}
        <div class="col-md-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}" required>
            @error ('last_name')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Suffix --}}
        <div class="col-md-3">
            <label for="suffix_name" class="form-label">Suffix</label>
            <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{old('suffix_name')}}">
        </div>
        {{-- Birthday --}}
        <div class="col-md-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{old('birth_date')}}" required>
            @error ('birth_date')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Gender --}}
        <div class="col-md-2">
            <label for="gender_id" class="form-label">Gender</label>
            <select class="form-select" id="gender_id" name="gender_id" required>
                @foreach ($genders as $gender)
                <option value="{{$gender->gender_id}}">{{$gender->gender}}</option>
                @endforeach
            </select>
        </div>
        {{-- Address --}}
        <div class="col-md-7">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" required>
            @error ('address')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Contact Number --}}
        <div class="col-md-4">
            <label for="contact_num" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_num" name="contact_num" value="{{old('contact_num')}}" required>
            @error ('contact_num')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Email Address --}}
        <div class="col-md-4">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email_address" name="email_address" value="{{old('email_address')}}" required>
            @error ('email_address')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Username --}}
        <div class="col-md-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{old('username')}}" required>
            @error ('username')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Password --}}
        <div class="col-md-4">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            @error ('password')<p class="error-message">{{$message}}</p>@enderror
        </div>
        {{-- Confirm Password --}}
        <div class="col-md-4">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>

        {{-- Buttons --}}
        <div class="col-12 mt-4">
            <a href="/user" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection
