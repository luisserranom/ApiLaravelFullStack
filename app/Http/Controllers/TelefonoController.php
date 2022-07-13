<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TelefonoController extends Controller
{
    public function index() {
        try{
            // $resp = Http::get(ENV('API_TELEFONO').'/api/telefonos');
            $resp = Http::get('http://10.155.61.16:8000/api/telefonos');

            // return $resp[0]['url_img'];

            return json_decode($resp);
        }catch (\Throwable $th) {
            return $th;
        }
    }

    public function indexWeb() {
        try{
            // $resp = Http::get(ENV('API_TELEFONO').'/api/telefonos');
            $telefonos = Http::get('http://10.155.61.16:8000/api/telefonos')->collect();

            return view('telefono.index', compact('telefonos'));
        }catch (\Throwable $th) {
            return $th;
        }
    }
}
