@extends('layouts.main')

@section('content')

<div class="container mt-3">
    <div class="navbar justify-content-between">
        <div>
            <h1>Category</h1>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('category.create') }}">New category</a>
        </div>
    </div>
    <div>
        @foreach($categories as $category)
            <div class="d-flex justify-content-between">
                <h5><a href="{{ route('category.show',$category->id) }}"> {{$category->id}}. {{$category->name}}</a></h5>
                <div>
                    <form action="{{ route('category.delete', $category->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a class="btn btn-success mb-3" href="{{ route('category.edit', $category->id) }}">Edit</a>
                        <button type="submit" class="btn btn-danger mb-3" >Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
