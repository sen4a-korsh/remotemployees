<?php


namespace App\Services;


use App\Models\Category;
use App\Models\Lot;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class LotFilter
{
    public function filterByCategories($categories)
    {
        if(empty($categories)){
            return Lot::paginate(10);
        }
        $lots = new Lot();
        foreach ($categories as $category){
            $lots = $lots->whereHas('categories', function (Builder $builder) use ($category){
                $builder->Where('name', '=', $category);
            });
        }
        return $lots->paginate(10);
    }
}
