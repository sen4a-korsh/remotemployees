<?php


namespace App\Services;


use App\Models\Lot;

class LotService
{
    public function store($data): object
    {
        $categories = $data['categories'];
        unset($data['categories']);

        $lot = Lot::create($data);
        $lot->categories()->attach($categories);

        return $lot;
    }

    public function update($data, $lot): object
    {
        $categories = $data['categories'];
        unset($data['categories']);

        $lot->update($data);
        $lot->categories()->sync($categories);

        return $lot;
    }
}
