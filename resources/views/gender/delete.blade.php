@extends('layout.main')
@extends('layout.nav')

@section('title', 'Delete Gender')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <form action="/gender/destroy/{{$gender->gender_id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <h2 class="mb-4 text-center">Are you sure you want to delete this Gender?</h2>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="gender" name="gender" value="{{$gender->gender}}" readonly>
                        </div>
                        <div class="mb-3 d-grid gap-2">
                            <a href="/gender" class="btn btn-outline-primary">Back</a>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this gender?')">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
