@extends('layout.main')
<!-- @extends('layout.nav') -->
<title>Update User</title>
@section('content')
<style>
    .container {
        padding: 5%;
    }

    .title {
        padding-bottom: 20px;
        font-size: 24px;
    }

    .form-label {
        font-weight: bold;
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
        background-color: #dc3545;
        color: #fff;
    }

    .btn-update {
        background-color: #007bff;
        color: #fff;
    }

    /* Optional: Style for file input */
    .custom-file-input::-webkit-file-upload-button {
        visibility: hidden;
    }

    .custom-file-input::before {
        content: 'Choose file';
        display: inline-block;
        background: linear-gradient(top, #f9f9f9, #e3e3e3);
        border: 1px solid #999;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        cursor: pointer;
        text-align: center;
        font-weight: normal;
        font-size: 10pt;
    }

    .custom-file-input:hover::before {
        border-color: black;
    }

    .custom-file-input:active::before {
        background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
    }
</style>

<div class="container">
    <h2 class="title">Update User</h2>
    <form class="row g-4" action="/user/update/{{$user->user_id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        {{-- First Name --}}
        <div class="col-md-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
            @error ('first_name')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        {{-- Middle Name --}}
        <div class="col-md-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{$user->middle_name}}">
        </div>
        {{-- Last Name --}}
        <div class="col-md-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
            @error ('last_name')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        {{-- Suffix --}}
        <div class="col-md-3">
            <label for="suffix_name" class="form-label">Suffix</label>
            <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{$user->suffix_name}}">
        </div>
        {{-- Birthday --}}
        <div class="col-md-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$user->birth_date}}">
            @error ('birth_date')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        {{-- Gender --}}
        <div class="col-md-2">
            <label for="gender_id" class="form-label">Gender</label>
            <select class="form-select" id="gender_id" name="gender_id">
                @foreach ($genders as $gender)
                <option value="{{ $gender->gender_id }}" @if ($gender->gender_id == $user->gender_id) selected @endif>
                    {{ $gender->gender }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- Address --}}
        <div class="col-md-7">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
            @error ('address')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        {{-- Contact Number --}}
        <div class="col-md-4">
            <label for="contact_num" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_num" name="contact_num" value="{{$user->contact_num}}">
            @error ('contact_num')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        <div class="col-md-4">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="email_address" name="email_address" value="{{$user->email_address}}">
            @error ('email_address')<p class="text-danger">{{$message}}</p>@enderror
        </div>
        {{-- Username --}}
        <div class="col-md">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}">
            @error ('username')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        {{-- User Image --}}
        <div class="col-md">
            <label for="user_image" class="form-label">User Image</label>
            <input type="file" class="form-control custom-file-input" id="user_image" name="user_image">
            @error ('user_image')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        {{-- Buttons --}}
        <div class="col-12 btn-container">
            <a href="/user" class="btn btn-back">Back</a>
            <button type="submit" class="btn btn-update">Update</button>
        </div>
    </form>
</div>
@endsection
