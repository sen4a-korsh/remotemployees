@extends('layouts.main')
@section('content')
    <div class="container mb-3 mt-5">
        <div class="d-flex justify-content-between">
            <h3> {{ $category->id }} . {{ $category->name }}</h3>
            <div>
                <a class="btn btn-success mb-3" href="{{ route('category.edit', $category->id) }}">Edit</a>
                <a class="btn btn-primary mb-3" href="{{ route('category.index') }}">Back</a>
            </div>
        </div>
    </div>
    <div>

    </div>
    <div>
                <form action="{{ route('lot.delete', $category->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger mb-3" >Delete</button>
                </form>
    </div>
    <div>

    </div>

@endsection
