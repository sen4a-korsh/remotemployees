@extends('layouts.main')
@section('content')
    <div class="container mt-3">
        <div>
            <h2>Edit category</h2>
        </div>
        <form action="{{route('category.update', $category->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $category->name }}">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection
