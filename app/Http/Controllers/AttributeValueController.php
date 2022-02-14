<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttribute_ValueRequest;
use App\Http\Requests\UpdateAttribute_ValueRequest;
use Illuminate\Http\Request;
use App\Models\Attribute_Value;
use App\Models\Attribute;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $atributosValue = Attribute_Value::all();
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
     * @param  \App\Http\Requests\StoreAttribute_ValueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttribute_ValueRequest $request)
    {
        //

        $valueAttribute = new Attribute_Value();

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

        return redirect('/admin/atributosValue');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute_Value  $attribute_Value
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute_Value $attribute_Value)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute_Value  $attribute_Value
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute_Value $attribute_Value, $id)
    {
        //
        //$atributosValue = $attribute_Value;
        $atributos = Attribute::all();
        $atributosValue = Attribute_Value::find($id);

        return view('admin.attributeValue.edit', compact('atributosValue', 'atributos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttribute_ValueRequest  $request
     * @param  \App\Models\Attribute_Value  $attribute_Value
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttribute_ValueRequest $request, Attribute_Value $attribute_Value, $id)
    {
        //
        


        $atributosValue = Attribute_Value::find($id);

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
        return redirect('/admin/atributosValue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute_Value  $attribute_Value
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute_Value $attribute_Value)
    {
        //
        $atributosValue = Attribute_Value::find($attribute_Value->id);
        
        $atributosValue->delete()->all();
        return redirect('/admin/atributosValue');
    }

    public function updateStatus(Request $request){
        
        $atributosValue = Attribute_Value::find($request->id);

        $atributosValue->update([
            'status' => $request->status,
        ]);

    }

    public function crearAttribute(Request $request){
        
        return $_POST['color'];
        exit;

        $atributosValue = Attribute_Value::find($request->id);

        $atributosValue->update([
            'status' => $request->status,
        ]);

    }
}
