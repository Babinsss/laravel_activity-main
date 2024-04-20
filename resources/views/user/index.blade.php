@extends('layout.main')
<!-- @extends('layout.nav') -->
@section('content')

<style>
    .container {
        padding-top: 20px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        margin-top: 20px;
        background-color: #fff;
    }

    .btn {
        padding-left: 15px;
        padding-right: 15px;
    }

    .user-image {
        max-width: 100px;
        height: auto;
        border-radius: 50%;
    }

    /* Adjustments for smaller screens */
    @media (max-width: 576px) {
        .container {
            padding-top: 10px;
            margin-top: 10px;
        }

        .user-image {
            max-width: 70px;
        }
    }

    /* Style for table hover effect */
    table tbody tr:hover {
        background-color: #f9f9f9;
    }

    /* Style for action buttons */
    .action-buttons a {
        margin-right: 5px;
    }
</style>

<div class="container">
    <h1 class="text-center mb-4">List of Users</h1>
    <form class="d-flex mb-3" action="/home">
        <input class="form-control me-2" type="text" name="search" id="search" placeholder="Search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
    <div>
        @include('include.messages')
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            {{ $users->withQueryString()->links() }}
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
                    <td class="action-buttons">
                        <a href="/user/show/{{$user->user_id}}" class="btn btn-primary">View</a>
                        <a href="/user/edit/{{$user->user_id}}" class="btn btn-warning">Update</a>
                        <a href="/user/delete/{{$user->user_id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <a href="/user/create" class="btn btn-primary">Add User</a>
    </div>
</div>

@endsection
