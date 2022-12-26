<?php

namespace App\Http\Controllers;

use App\Models\Love;
use App\Http\Requests\StoreLoveRequest;
use App\Http\Requests\UpdateLoveRequest;

class LoveController extends Controller
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
     * @param  \App\Http\Requests\StoreLoveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function show(Love $love)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function edit(Love $love)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoveRequest  $request
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLoveRequest $request, Love $love)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Love  $love
     * @return \Illuminate\Http\Response
     */
    public function destroy(Love $love)
    {
        //
    }
}
