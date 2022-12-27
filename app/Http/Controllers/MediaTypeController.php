<?php

namespace App\Http\Controllers;

use App\Models\MediaType;
use App\Http\Requests\StoreMediaTypeRequest;
use App\Http\Requests\UpdateMediaTypeRequest;

class MediaTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreMediaTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMediaTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaType  $mediaType
     * @return \Illuminate\Http\Response
     */
    public function show(MediaType $mediaType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaType  $mediaType
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaType $mediaType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMediaTypeRequest  $request
     * @param  \App\Models\MediaType  $mediaType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMediaTypeRequest $request, MediaType $mediaType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaType  $mediaType
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaType $mediaType)
    {
        //
    }
}
