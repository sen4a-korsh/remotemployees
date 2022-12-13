<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'Category';

    public function lots()
    {
        return $this->belongsToMany(Lot::class, 'category_lots');
    }
}
