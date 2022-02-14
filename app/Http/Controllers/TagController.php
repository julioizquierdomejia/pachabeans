<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $etiquetas = Tag::all();

        return view('admin.tag.index', compact('etiquetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        //

        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);

        $tag = new Tag();
        
        if($request->hasFile("imagen")){
            //obteneos el nombre de la imagen con GetclientOriginalName()
            $nombre = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
            $ruta = storage_path() . '/app/public/images/tags/' . $nombre;


            //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
            Image::make($request->file('imagen'))->resize(138, 138)->save($ruta);

            //Grabamos en la base de datos toda la ruta de la imagen
            $tag->uri_image = '/storage/images/tags/';
            $tag->image = $nombre;
        }


        $tag->name = $request->name;
        $tag->description = $request->description;
        $tag->color = $request->color;

        $tag->save();

        return redirect('/admin/tag');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //        
        $etiqueta = $tag;

        return view('admin.tag.edit', compact('etiqueta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagRequest  $request
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        //
        $tag = Tag::find($tag->id);

        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);

        if($request->hasFile("imagen")){

            //primero buscamos la imagen  para eliminarla
            //reemplazamos de la cadena de la uri storage por public
            $name_img = 'storage/app/public/images/tags/' . $tag->image;
            //$name_img = str_replace('storage', 'public', $name_img);
            //dd($name_img);

            Storage::delete($name_img);

            //obteneos el nombre de la imagen con GetclientOriginalName()
            $nombre = Str::random(10) . '_' . $request->file('imagen')->getClientOriginalName();

            //Creamos una ruta apuntando al Storage, y a que carpeta irá, tiene que existitr la carpeta
            $ruta = storage_path() . '/app/public/images/tags/' . $nombre;


            //en una sola linea, creamos la imagen, la redimensionamos y la grabamos en la ruta que hemos crado
            Image::make($request->file('imagen'))->resize(138, 138)->save($ruta);

            //Grabamos en la base de datos toda la ruta de la imagen
            $tag->uri_image = '/storage/images/tags/';
            $tag->image = $nombre;
        }


        $tag->update([
            'name'  =>  $request->name,
            'description'  =>  $request->description,
            'color'  =>  $request->color,
            'image'  =>  $request->image,
        ]);

        //return redirect('/admin/category');
        return redirect('/admin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
        $etiqueta = Tag::find($tag->id);
        
        $etiqueta->delete();
        return redirect('/admin/tag');
    }

    public function updateStatus(Request $request){
        
        $tag = Tag::find($request->id);

        $tag->update([
            'status' => $request->status,
        ]);

    }
}
