@extends('layouts.main')
@section('content')

    <div class="container mt-3">
        <div>
            <h2>Edit lot</h2>
        </div>
        <form action="{{route('lot.update', $lot->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $lot->title }}">
                @error('title')
                <p class="text-danger">Fill in the field "Title"</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" id="description" placeholder="Description">{{ $lot->description }}</textarea>
                @error('description')
                <p class="text-danger">Fill in the field "Description"</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Price" value="{{ $lot->price }}">
                @error('price')
                <p class="text-danger">Fill in the field "Price"</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="categories" class="form-label">Category</label>
                <select multiple name="categories[]" class="form-control" id="categories">
                    @foreach($categories as $category)
                        <option
                            @foreach($lot->categories as $lotCategories)
                                    {{$lotCategories->id == $category->id ? 'selected' : ''}}
                            @endforeach
                            value="{{ $category->id }}"> {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection
