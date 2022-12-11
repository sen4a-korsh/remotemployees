@extends('layouts.main')
@section('content')

    <div class="container mb-3 mt-5">
        <div class="d-flex justify-content-between">
            <h3> <p>{{ $lot->id }} . {{ $lot->title }}</p></h3>
            <form action="{{ route('lot.delete', $lot->id) }}" method="post">
                @csrf
                @method('delete')
                <a class="btn btn-success mb-3" href="{{ route('lot.edit', $lot->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger mb-3" >Delete</button>
                <a class="btn btn-primary mb-3" href="{{ route('lot.index') }}">Back</a>
            </form>
        </div>
        <div class="">
            <p><b>Categories:
                @foreach($categories as $category)
                    <a href="">{{ $category->name }}</a>,
                @endforeach
            </b></p>
        </div>
        <div> <p>{{ $lot->description }}</p></div>
        <div> <b>Price: {{ $lot->price }} $</b></div>
    </div>


@endsection
