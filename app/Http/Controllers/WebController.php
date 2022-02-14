<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ImagesProduct;

class WebController extends Controller
{
    //
    public function index(){
        

        //traemos todos los productos
        $productos = Product::where('status', 0)->get();
        $imagenes_productos = ImagesProduct::where('status', 0)->get();

        return view('welcome', compact('productos', 'imagenes_productos'));
    }

    public function show($id){

        $producto = Product::find($id);
        return view('detail', compact('producto'));
    }

}