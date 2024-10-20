<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drones extends Model
{
    use HasFactory;
    protected $fillable = [ 
        "id",
        "drone_name",
        "model",
        "brand",
        "airworthiness",
        "operational",
        "internalSerial",
        "printedSerial",
        "remoteID",
        "registration",
        "purchased",
        "notes"
    ];
}
