@extends('layout.main')
@extends('layout.nav')
@section('title', 'Update Gender')
@section('content')
<style>
    .container {
        padding: 5%;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <form class="row g-3" action="/gender/update/{{$gender->gender_id}}" method="post">
                        <h2 class="text-center mb-4">Update Gender</h2>
                        @method('PUT')
                        @csrf
                        <div class="col-md-12">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{$gender->gender}}">
                            @error('gender')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-12 mt-3">
                            <a href="/gender" class="btn btn-outline-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this gender?')">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
