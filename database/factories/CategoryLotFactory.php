<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Lot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryLot>
 */
class CategoryLotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $lots = Lot::count();
        $categories = Category::count();
        return [
            'lot_id' => rand(1,$lots),
            'category_id' => rand(1,$categories),
        ];
    }
}
