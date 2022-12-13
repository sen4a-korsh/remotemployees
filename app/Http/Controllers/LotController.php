<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lot\StoreRequest;
use App\Http\Requests\Lot\UpdateRequest;
use App\Models\Category;
use App\Models\Lot;
use App\Services\LotFilter;
use App\Services\LotService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class LotController extends Controller
{

    public function index(Request $request, LotFilter $lotFilter)
    {
        $lots = $lotFilter->filterByCategories($request->categories);

        $checkCategoryArr = $request->categories;

        $categories = Category::all();

        return view('lot.index', compact('lots', 'categories', 'checkCategoryArr'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('lot.create', compact('categories'));
    }

    public function show(Lot $lot)
    {
        $categories = $lot->categories;

        return view('lot.show', compact('lot', 'categories'));
    }

    public function edit(Lot $lot)
    {
        $categories = Category::all();

        return view('lot.edit', compact('lot', 'categories'));
    }

    public function update(Lot $lot, UpdateRequest $request)
    {
        $data = $request->validated();

        $this->service->update($data, $lot);

        return redirect()->route('lot.show', $lot->id);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $lot = $this->service->store($data);

        return redirect()->route('lot.show', $lot->id);
    }

    public function destroy(Lot $lot)
    {
        $lot->delete();

        return redirect()->route('lot.index');
    }
}
