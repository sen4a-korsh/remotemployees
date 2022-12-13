@extends('layouts.main')

@section('content')

<div class="container-xl mt-3 d-flex">
    <div class="d-block filter-container">
        <div class="filter">
             <h3>Categories:</h3>
            <form action="{{route('lot.index')}}" method="get">
                <div class="m-lg-2">
                    @foreach($categories as $category)

                        <input class=" form-check-input" id="category" name="categories[]" value="{{$category->name}}" type="checkbox"
                            @if(!empty($checkCategoryArr))
                                @foreach($checkCategoryArr as $nameCategory)
                                       {{ $nameCategory == $category->name ? 'checked' : '' }}
                                @endforeach
                            @endif
                        >
                        <label for="category" class="form-check-label">{{$category->name}}</label><br>

                    @endforeach
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-primary">Show</button>
                </div>
            </form>
        </div>
    </div>
    <div class="d-block p-3 lots">
        <div class="navbar justify-content-between">
            <div>
                <h1>Lots</h1>
            </div>
            <div>
                <a class="btn btn-success" href="{{ route('lot.create') }}">Add</a>
            </div>
        </div>
        <div>
            <div>
                @foreach($lots as $lot)
                    <div>
                        <h5><a href="{{ route('lot.show',$lot->id ) }}"> {{$lot->id}}. {{$lot->title}}</a></h5>
                    </div>
                @endforeach
            </div>
            <div class="col mb-4 mt-3">
                {{ $lots->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>

@endsection
