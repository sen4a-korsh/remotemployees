@extends('layouts.main')

@section('content')

    <div class="container mt-3">
        <div>
            <h2>Create category</h2>
        </div>
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>

@endsection
