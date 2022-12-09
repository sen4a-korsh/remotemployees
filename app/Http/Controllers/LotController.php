<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lot;
use Illuminate\Http\Request;

class LotController extends Controller
{
    public function index()
    {
        $lots = Lot::count();

        dd($lots);
    }
}
