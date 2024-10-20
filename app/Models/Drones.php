<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class Drones extends Model
{
    use Sushi;
 
    /**
     * Model Rows
     *
     * @return void
     */
    public function getRows()
    {
        //API
        $drones = Http::get('https://dummyjson.com/products')->json();
 
        //filtering some attributes
        $drones = Arr::map($drones['drones'], function ($item) {
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
 
        return $drones;
        // //API
        // $drones = Http::get('https://api.airdata.com/drones')->json();
 
        // //filtering some attributes
        // $api_drones = Arr::map($drones['drones'], function ($item) {
        //     return Arr::only($item,
        //         [
        //         "id",
        //         "name",
        //         "model",
        //         "brand",
        //         "airworthiness",
        //         "operational",
        //         "internalSerial",
        //         "printedSerial",
        //         "remoteID",
        //         "registration",
        //         "purchased",
        //         "notes"
        //         ]
        //     );
        // });
 
        // return $api_drones;
    }
    // use HasFactory;
    // protected $fillable = [ 
    //     "id",
    //     "drone_name",
    //     "model",
    //     "brand",
    //     "airworthiness",
    //     "operational",
    //     "internalSerial",
    //     "printedSerial",
    //     "remoteID",
    //     "registration",
    //     "purchased",
    //     "notes"
    // ];
}
