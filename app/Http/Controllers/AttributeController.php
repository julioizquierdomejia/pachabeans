<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;
use Illuminate\Http\Request;
use App\Models\Value;
use App\Models\Attribute;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $atributos = Attribute::all();
        $valores = Value::all();

        return view('admin.attribute.index', compact('atributos', 'valores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.attribute.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttributeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttributeRequest $request)
    {
        //
        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);

        Attribute::create([
            'name'  =>  $request->name,
            'description'  =>  $request->description,
            'color' => $request->color,
        ]);

        return redirect('/admin/attribute');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute $attribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        //
        $atributo = $attribute;

        return view('admin.attribute.edit', compact('atributo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttributeRequest  $request
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        //
        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);

        $atributo = Attribute::find($attribute->id);


        $atributo->update([
            'name' => $request->name,
            'description' => $request->description,
            'color' => $request->color,
        ]);

        //return redirect('/admin/category');
        return redirect('/admin/attribute');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        //
        $atributo = Attribute::find($attribute->id);
        
        $atributo->delete();
        return redirect('/admin/attribute');
    }

    public function updateStatus(Request $request){
        
        $atributo = Attribute::find($request->id);

        $atributo->update([
            'status' => $request->status,
        ]);

    }
}
