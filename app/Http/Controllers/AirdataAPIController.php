<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirdataAPIController extends Controller
{
    private $apiKey = 'ad_BQTIrHBrIBrEcj73qbQZV4M2jEJhu'; // API Key dari Airdata

    // Fungsi untuk mendapatkan data drone dari API
    public function getDrones()
    {
        $response = Http::get('https://api.airdata.com/drones', [
            'api_key' => $this->apiKey,
        ]);

        if ($response->successful()) {
            return $response->json(); // Mengembalikan data drone dalam bentuk array
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
}
