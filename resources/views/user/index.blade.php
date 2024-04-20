@extends('layout.main')
<!-- @extends('layout.nav') -->
@section('content')

<!-- Move inline styles to a separate CSS file or section -->
<style>
    .container {
        padding-top: 20px; /* Use pixels for small values */
        border: 1px solid grey;
        border-radius: 5px;
        margin-top: 20px; /* Use pixels for small values */
    }

    .btn {
        padding-left: 15px; /* Adjust padding */
        padding-right: 15px; /* Adjust padding */
    }

    .user-image {
        max-width: 100px;
        height: auto; /* Ensure aspect ratio */
        border-radius: 50%; /* Circular shape */
    }
</style>

<div class="container">
    <h1>List of Users</h1>
    <form class="d-flex" action="/home">
        <label class="visually-hidden" for="search">Search</label>
        <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <div>
        @include('include.messages')
    </div>
    <div class="table-responsive">
        <table class="table">
            {{ $users->withQueryString()->links() }}
            <div class="mb-3">
                <a href="/user/create" class="btn btn-primary float-end">Add User</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">User Profile</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><img class="user-image" src="{{ $user->user_image ? asset('storage/img/user/' . $user->user_image) : 'https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-600nw-1677509740.jpg' }}" alt=""></td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->middle_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->gender->gender}}</td>
                    <td>{{$user->email_address}}</td>
                    <td>
                        <a href="/user/show/{{$user->user_id}}" class="btn btn-primary">View</a>
                        <a href="/user/edit/{{$user->user_id}}" class="btn btn-warning">Update</a>
                        <a href="/user/delete/{{$user->user_id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
