<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categorias = Category::all();

        return view('admin.category.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //

        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);

        Category::create([
            'name'  =>  $request->name,
        ]);

        return redirect('/admin/category');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $categoria = $category;

        return view('admin.category.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
        //validaciones
        $request->validate([
            'name'  =>  'required',
        ]);

        $categoria = Category::find($category->id);

        $categoria->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        //return redirect('/admin/category');
        return redirect('/admin/category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $categoria = Category::find($category->id);
        
        $categoria->delete();
        return redirect('/admin/category');
    }

    public function updateStatus(Request $request){
        
        $categoria = Category::find($request->id);

        $categoria->update([
            'status' => $request->status,
        ]);

    }

    public function updateRecommended(Request $request){

        $categoria = Category::find($request->id);

        $categoria->update([
            'recommended' => $request->recommended,
        ]);
    }

    public function updateOutstanding(Request $request){

        $categoria = Category::find($request->id);

        $categoria->update([
            'outstanding' => $request->outstanding,
        ]);
    }
}
