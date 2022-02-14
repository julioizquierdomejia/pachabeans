<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecommendationsRequest;
use App\Http\Requests\UpdateRecommendationsRequest;
use App\Models\Recommendations;

class RecommendationsController extends Controller
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
     * @param  \App\Http\Requests\StoreRecommendationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecommendationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recommendations  $recommendations
     * @return \Illuminate\Http\Response
     */
    public function show(Recommendations $recommendations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recommendations  $recommendations
     * @return \Illuminate\Http\Response
     */
    public function edit(Recommendations $recommendations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecommendationsRequest  $request
     * @param  \App\Models\Recommendations  $recommendations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecommendationsRequest $request, Recommendations $recommendations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recommendations  $recommendations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recommendations $recommendations)
    {
        //
    }
}
