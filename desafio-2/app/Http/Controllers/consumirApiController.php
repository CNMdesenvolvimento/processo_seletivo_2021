<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class consumirApiController extends Controller
{
    public function index(){
        $response = Http::get('https://marcha-2019.cnm.org.br/webservice/noticias');
        $api = $response->json(['noticias']);

        return view('index', compact('api'));
    }
}
