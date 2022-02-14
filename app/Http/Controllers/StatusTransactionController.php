<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatusTransactionRequest;
use App\Http\Requests\UpdateStatusTransactionRequest;
use App\Models\StatusTransaction;

class StatusTransactionController extends Controller
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
     * @param  \App\Http\Requests\StoreStatusTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatusTransaction  $statusTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(StatusTransaction $statusTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusTransaction  $statusTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusTransaction $statusTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusTransactionRequest  $request
     * @param  \App\Models\StatusTransaction  $statusTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusTransactionRequest $request, StatusTransaction $statusTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusTransaction  $statusTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusTransaction $statusTransaction)
    {
        //
    }
}
