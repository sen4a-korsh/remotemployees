<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\CategoryLot;
use App\Models\Lot;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $lots = Lot::factory(50)->create();
        $categories = Category::factory(10)->create();

        foreach ($lots as $lot){
            $categoriesIds = $categories->random(5)->pluck('id');
            $lot->categories()->attach($categoriesIds);
        }
    }
}
