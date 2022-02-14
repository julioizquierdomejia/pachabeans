<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttribute_ValueRequest;
use App\Http\Requests\UpdateAttribute_ValueRequest;
use App\Http\Requests\StoreValueRequest;
use App\Http\Requests\UpdateValueRequest;
use Illuminate\Http\Request;    
use App\Models\Attribute;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Value;

class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $atributosValue = Value::all();
        $atributos = Attribute::all();

        return view('admin.attributeValue.index', compact('atributosValue', 'atributos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $atributos = Attribute::all();

        return view('admin.attributeValue.create', compact('atributos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreValueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValueRequest $request)
    {
        //
        $valueAttribute = new Value();

        //validaciones
        $request->validate([
            'name'  =>  'required',
            'attribute_id'  =>  'required',
        ]);

        if($request->hasFile("imagen")){
            //obteneos el nombre de la imagen con GetclientOriginalName()
            $nombre = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
            $ruta = storage_path() . '/app/public/images/tags/' . $nombre;


            //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
            Image::make($request->file('imagen'))->resize(138, 138)->save($ruta);

            //Grabamos en la base de datos toda la ruta de la imagen
            $valueAttribute->uri_image = '/storage/images/tags/';
            $valueAttribute->image = $nombre;
        }

        $valueAttribute->name = $request->name;
        $valueAttribute->description = $request->description;
        $valueAttribute->color = $request->color;
        $valueAttribute->attribute_id = $request->attribute_id;

        $valueAttribute->save();

        return redirect('/admin/value');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function show(Value $value)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function edit(Value $value)
    {
        //
        $atributos = Attribute::all();
        $atributosValue = Value::find($value->id);

        return view('admin.attributeValue.edit', compact('atributosValue', 'atributos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateValueRequest  $request
     * @param  \App\Models\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateValueRequest $request, Value $value)
    {
        //
        $atributosValue = Value::find($value->id);

        //validaciones
        $request->validate([
            'name'  =>  'required',
            'attribute_id'  =>  'required',
        ]);

        if($request->hasFile("imagen")){
            //obteneos el nombre de la imagen con GetclientOriginalName()
            $nombre = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
            $ruta = storage_path() . '/app/public/images/tags/' . $nombre;


            //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
            Image::make($request->file('imagen'))->resize(138, 138)->save($ruta);

            //Grabamos en la base de datos toda la ruta de la imagen
            $atributosValue->uri_image = '/storage/images/tags/';
            $atributosValue->image = $nombre;
        }

        $atributosValue->name = $request->name;
        $atributosValue->description = $request->description;
        $atributosValue->color = $request->color;
        $atributosValue->attribute_id = $request->attribute_id;

        $atributosValue->update();

        //return redirect('/admin/category');
        return redirect('/admin/value');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Value  $value
     * @return \Illuminate\Http\Response
     */
    public function destroy(Value $value)
    {
        //
        $atributosValue = Value::find($value->id);
        
        $atributosValue->delete()->all();
        return redirect('/admin/atributosValue');
    }

    public function updateStatus(Request $request){
        
        $atributosValue = Attribute_Value::find($request->id);

        $atributosValue->update([
            'status' => $request->status,
        ]);

    }

    /*
    public function crearAttribute(Request $request){
        
        return $_POST['color'];
        exit;

        $atributosValue = Attribute_Value::find($request->id);

        $atributosValue->update([
            'status' => $request->status,
        ]);

    }
    */
}
