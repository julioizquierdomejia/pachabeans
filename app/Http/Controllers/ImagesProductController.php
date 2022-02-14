<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImagesProductRequest;
use App\Http\Requests\UpdateImagesProductRequest;
use App\Models\ImagesProduct;

class ImagesProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImagesProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagesProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ImagesProduct $imagesProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ImagesProduct $imagesProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImagesProductRequest  $request
     * @param  \App\Models\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImagesProductRequest $request, ImagesProduct $imagesProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagesProduct $imagesProduct)
    {
        //$img = $imagesProduct::find($id);
        
        $imagesProduct->delete();
        //unlink($img);

        return redirect('/admin/product');
    }

    
    
}
