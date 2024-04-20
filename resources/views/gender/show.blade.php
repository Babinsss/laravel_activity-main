@extends('layout.main')
@extends('layout.nav')
@section('title', 'View Gender')
@section('content')
<style>
    .container {
        padding-top: 5%;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <form class="row g-3">
                        <h2 class="text-center mb-4">View Gender</h2>
                        <div class="col-md-12">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" value="{{$genders->gender}}" readonly>
                        </div>
                        <div class="col-12">
                            <a href="/gender" class="btn btn-danger btn-block">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
