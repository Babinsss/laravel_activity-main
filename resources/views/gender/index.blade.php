@extends('layout.main')
@extends('layout.nav')
@section('title', 'Gender')
@section('content')
<style>
    .container {
        padding-top: 2%;
        margin-top: 2%;
    }

    .action-btn-group {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .action-btn-group .btn {
        margin: 5px;
    }
</style>

<div class="container">
    @include('include.messages')
    <h2 class="mb-4">Gender</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Gender</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Updated</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genders as $gender)
            <tr>
                <td>{{ $gender->gender }}</td>
                <td>{{ $gender->created_at }}</td>
                <td>{{ $gender->updated_at }}</td>
                <td>
                    <div class="action-btn-group">
                        <a href="/gender/show/{{$gender->gender_id}}" class="btn btn-primary btn-sm">View</a>
                        <a href="/gender/edit/{{$gender->gender_id}}" class="btn btn-warning btn-sm">Update</a>
                        <a href="/gender/delete/{{$gender->gender_id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this gender?')">Delete</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary float-end" href="/gender/create" role="button">Add Gender</a>
</div>
@endsection
