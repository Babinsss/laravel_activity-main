@extends('layout.main')
@extends('layout.nav')
<title>Delete User</title>
@section('content')
<style>
    .container {
        padding: 5%;
    }

    .title {
        padding-bottom: 20px;
        font-size: 24px;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .btn {
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 5px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn-back {
        background-color: #007bff;
        color: #fff;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
    }

    .form-control[readonly] {
        background-color: #f8f9fa;
        border: none;
    }

    /* Media Queries for Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 3%;
        }

        .btn-container {
            flex-direction: column;
            align-items: center;
        }

        .btn {
            width: 100%;
            margin: 5px 0;
        }
    }
</style>

<div class="container">
    <h2 class="title"> Are you sure you want to Delete User: #{{$user->user_id}}</h2>
    <form class="row g-4" action="/user/destroy/{{$user->user_id}}" method="POST">
        @method('DELETE')
        @csrf
        {{-- Full Name --}}
        <div class="col-md">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{$user->first_name}} @if($user->middle_name){{$user->middle_name[0]}}. @endif{{$user->last_name}} @if($user->suffix_name){{$user->suffix_name}} @endif" readonly>
        </div>
        {{-- Birth Date --}}
        <div class="col-md-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$user->birth_date}}" readonly>
        </div>
        {{-- Gender --}}
        <div class="col-md-2">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" value="{{ $user->gender->gender }}" readonly>
        </div>
        {{-- Address --}}
        <div class="col-md-7">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}" readonly>
        </div>
        {{-- Contact Number --}}
        <div class="col-md-4">
            <label for="contact_num" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_num" name="contact_num" value="{{$user->contact_num}}" readonly>
        </div>
        {{-- Email Address --}}
        <div class="col-md-4">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="email_address" name="email_address" value="{{$user->email_address}}" readonly>
        </div>
        {{-- Username --}}
        <div class="col-md">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}" readonly>
        </div>

        {{-- Buttons --}}
        <div class="col-12 btn-container">
            <a href="/user" class="btn btn-back">Back</a>
            <button type="submit" class="btn btn-delete">Delete</button>
        </div>
    </form>
</div>
@endsection
