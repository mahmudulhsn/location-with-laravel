<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function search(Request $request)
    {
        $response = Http::get("https://barikoi.xyz/v1/api/search/autocomplete/".env('BARI_KOI_API_KEY')."/place?q=$request->search");

        return $response;
    }
}
