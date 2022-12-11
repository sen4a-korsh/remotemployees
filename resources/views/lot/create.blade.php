@extends('layouts.main')

@section('content')

<div class="container mt-3">
    <div>
        <h2>Create lot</h2>
    </div>
    <form action="{{route('lot.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Price" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <label for="categories" class="form-label">Category</label>
            <select multiple name="categories[]" class="form-control" id="categories">
                @foreach($categories as $category)
                    <option
                    {{ old('category_id') == $category->id ? 'selected' : ''  }}
                    value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>

@endsection
