<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Value;
use App\Models\Tag;
use App\Models\ImagesProduct;

use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Product::all();
        $categorias = Category::all();
        $atributos_valores = Value::all();
        $atributos = Attribute::all();

        return view('admin.product.index', compact('productos', 'categorias', 'atributos', 'atributos_valores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos = Product::all();
        $subcategorias = Subcategory::all();
        $atributos_valores = Value::all();
        $atributos = Attribute::all();
        $etiquetas = Tag::all();

        return view('admin.product.create', compact('productos', 'subcategorias', 'atributos', 'atributos_valores', 'etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
        $at = $request->ofertas_array;

        //validaciones
        $request->validate([
            'name'  =>  'required',
            'price'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'offer'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'stock' => 'required',
        ]);

        $producto = new Product();

        if($request->hasFile("imagen")){
            //obteneos el nombre de la imagen con GetclientOriginalName()
            $nombre = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
            $ruta = storage_path() . '/app/public/images/productos/banners/' . $nombre;


            //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
            Image::make($request->file('imagen'))->resize(1120, 450)->save($ruta);

            //Grabamos en la base de datos toda la ruta de la imagen
            $producto->uri_image_banner = '/storage/images/productos/banners/';
            $producto->image_banner = $nombre;
        }

        $producto->name = $request->name;
        $producto->description = $request->description;
        $producto->price = $request->price;
        $producto->offer = $request->offer;
        $producto->stock = $request->stock;

        $producto->save();

        if($request->hasFile("imagenes")){


            foreach($request->imagenes as $value => $img_prod){

                //obteneos el nombre de la imagen con GetclientOriginalName()
                $nombre = Str::random(10) . '_' . $img_prod->getClientOriginalName();

                //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
                $ruta = storage_path() . '/app/public/images/productos/img/' . $nombre;


                //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
                Image::make($img_prod)->resize(456, 364)->save($ruta);

                //Grabamos en la base de datos toda la ruta de la imagen
                $imagen_producto = new ImagesProduct();
                $imagen_producto->product_id = $producto->id;
                $imagen_producto->uri_image = '/storage/images/productos/img/';
                $imagen_producto->image = $nombre;

                if($value == 0){
                    $imagen_producto->principal = 0;
                }

                $imagen_producto->save();
            }
        }



        //registramos los atributos de este producto 
        /*
        foreach ($attr as $key => $value) {
            $producto->values()->attach($value);            
        };
        */

        if($at == null){

        }else{
            //convertimos el array de los valores de los atributos
            $attr = explode(",",$request->attr);
            $producto->values()->sync($attr);    
        }
        
        $producto->subcategories()->sync($request->attribute_id);
        $producto->tags()->sync($request->tag_id);

        

        return redirect('/admin/product');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $producto = $product;
        $atributos_valores = Value::all();
        $atributos = Attribute::all();
        $values_a = [];

        //traemos todos los valores de atributos elegidos
        $valores = DB::table('product_value')
                    ->where('product_id', $producto->id)->get();

        foreach ($valores as $key => $value) {
            array_push($values_a, $value->value_id);
        }

        //convertimos el array en String
        $values = implode(',', $values_a);

        return view('admin.product.edit', compact('producto', 'atributos', 'atributos_valores', 'values', 'values_a'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        //validaciones
        $request->validate([
            'name'  =>  'required',
            'price'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'offer'=>'required|numeric|regex:/^[\d]{0,11}(\.[\d]{1,2})?$/',
            'stock' => 'required',
        ]);

        

        if($request->hasFile("imagen")){
            //obteneos el nombre de la imagen con GetclientOriginalName()
            $nombre = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
            $ruta = storage_path() . '/app/public/images/productos/banners/' . $nombre;


            //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
            Image::make($request->file('imagen'))->resize(1120, 450)->save($ruta);

            //Grabamos en la base de datos toda la ruta de la imagen
            $product->uri_image_banner = '/storage/images/productos/banners/';
            $product->image_banner = $nombre;
        }


        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->offer = $request->offer;
        $product->stock = $request->stock;

        $product->update();

        if($request->hasFile("imagenes")){

            foreach($request->imagenes as $img_prod){
                //obteneos el nombre de la imagen con GetclientOriginalName()
                $nombre = Str::random(10) . '_' . $img_prod->getClientOriginalName();

                //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
                $ruta = storage_path() . '/app/public/images/productos/img/' . $nombre;


                //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
                Image::make($img_prod)->resize(500, 500)->save($ruta);

                //Grabamos en la base de datos toda la ruta de la imagen
                ImagesProduct::create([
                    'product_id' => $product->id,
                    'uri_image' =>'/storage/images/productos/img/',
                    'image' => $nombre,
                ]);
            }
        }

        //sliminamos todas las relaciones de valores y productos

        //convertimos el array de los valores de los atributos
        $attr = explode(",",$request->attr);
        $product->values()->sync($attr);

        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function updateStatus(Request $request){

        $producto = Product::find($request->id);

        $producto->update([
            'status' => $request->status,
        ]);
    }

    public function updateRecommended(Request $request){

        $producto = Product::find($request->id);

        $producto->update([
            'recommended' => $request->recommended,
        ]);
    }

    public function updateOutstanding(Request $request){

        $producto = Product::find($request->id);

        $producto->update([
            'outstanding' => $request->outstanding,
        ]);
    }


    

}




















