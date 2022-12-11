@extends('layouts.main')

@section('content')

<div class="container mt-3">
    <div class="navbar justify-content-between">
        <div>
            <h1>Lots</h1>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('lot.create') }}">New lots</a>
        </div>
    </div>
    <div>
        @foreach($lots as $lot)
            <div>
                <h5><a href="{{ route('lot.show',$lot->id ) }}"> {{$lot->id}}. {{$lot->title}}</a></h5>
            </div>
        @endforeach
    </div>
</div>

@endsection
