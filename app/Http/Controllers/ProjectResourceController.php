<?php

namespace App\Http\Controllers;

use App\Models\project_resource;
use App\Http\Requests\Storeproject_resourceRequest;
use App\Http\Requests\Updateproject_resourceRequest;

class ProjectResourceController extends Controller
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
     * @param  \App\Http\Requests\Storeproject_resourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeproject_resourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project_resource  $project_resource
     * @return \Illuminate\Http\Response
     */
    public function show(project_resource $project_resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project_resource  $project_resource
     * @return \Illuminate\Http\Response
     */
    public function edit(project_resource $project_resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateproject_resourceRequest  $request
     * @param  \App\Models\project_resource  $project_resource
     * @return \Illuminate\Http\Response
     */
    public function update(Updateproject_resourceRequest $request, project_resource $project_resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project_resource  $project_resource
     * @return \Illuminate\Http\Response
     */
    public function destroy(project_resource $project_resource)
    {
        //
    }
}
