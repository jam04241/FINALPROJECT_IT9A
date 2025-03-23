<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PSGCController extends Controller
{
    public function getRegions()
    {
        $response = Http::get('https://psgc-api-url.com/api/regions'); // Replace with actual API URL
        $data = $response->json();

        return response()->json($data);
    }
}
