<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class Product extends Model
{
    use HasFactory, Sushi;
    public function getRows()
    {
        //API
        $products = Http::get('https://dummyjson.com/products')->json();
 
        //filtering some attributes
        $products = Arr::map($products['products'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'title',
                    'description',
                    'price',
                    'rating',
                    'brand',
                    'category',
                    'thumbnail',
                ]
            );
        });
 
        return $products;
    }
}
