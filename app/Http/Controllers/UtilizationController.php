<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUtilizationRequest;
use App\Http\Requests\UpdateUtilizationRequest;
use App\Models\Utilization;

class UtilizationController extends Controller
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
     * @param  \App\Http\Requests\StoreUtilizationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUtilizationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilization  $utilization
     * @return \Illuminate\Http\Response
     */
    public function show(Utilization $utilization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilization  $utilization
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilization $utilization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUtilizationRequest  $request
     * @param  \App\Models\Utilization  $utilization
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUtilizationRequest $request, Utilization $utilization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilization  $utilization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilization $utilization)
    {
        //
    }
}
