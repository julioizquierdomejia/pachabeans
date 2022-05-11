<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ImagesProduct;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Attribute;

use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    //
    public function index(){
        

        //traemos todos los productos
        $productos = Product::where('status', 0)->get();
        $imagenes_productos = ImagesProduct::where('status', 0)->get();
        $categorias = Category::where('status', 0)->get();
        $subcategorias = Subcategory::where('status', 0)->get();
        $atributos = Attribute::where('status', 0)->get();

        return view('welcome', compact('productos', 'imagenes_productos', 'categorias', 'subcategorias', 'atributos'));
    }

    public function show($id){

        $categorias = Category::where('status', 0)->get();
        $subcategorias = Subcategory::where('status', 0)->get();

        $producto = Product::find($id);

        //traigo las imagenes de este producto
        $imagen = ImagesProduct::where('product_id', $producto->id)->first();

        return view('detail', compact('producto', 'categorias', 'subcategorias', 'imagen'));
    }

}