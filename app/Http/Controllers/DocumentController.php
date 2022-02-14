<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;
use Illuminate\Http\Request;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $documento = Document::all();

        return view('admin.document.index', compact('documento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocumentRequest $request)
    {
        //
        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);

        Document::create([
            'name'  =>  $request->name,
            'description'  =>  $request->description,
        ]);

        return redirect('/admin/document');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
        $documento = $document;

        return view('admin.document.edit', compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDocumentRequest  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        //
        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);
        
        $documento = Document::find($document->id);


        $documento->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        //return redirect('/admin/category');
        return redirect('/admin/document');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
        $documento = Document::find($document->id);
        
        $documento->delete();
        return redirect('/admin/document');
    }

    public function updateStatus(Request $request){
        
        $documento = Document::find($request->id);

        $documento->update([
            'status' => $request->status,
        ]);

    }
}
