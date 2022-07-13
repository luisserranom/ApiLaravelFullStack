<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        return Producto::all();
        // if (session('userSession')) {
        //     return view('home');
        // }

        // return redirect('/');
    }

    public function show($id)
    {
        return Producto::find($id);
    }
}
