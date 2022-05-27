<?php

namespace App\Http\Controllers;

use App\Models\PermissionRole;
use App\Http\Requests\StorePermissionRoleRequest;
use App\Http\Requests\UpdatePermissionRoleRequest;

class PermissionRoleController extends Controller
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
     * @param  \App\Http\Requests\StorePermissionRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRoleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionRole $permissionRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionRole $permissionRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionRoleRequest  $request
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRoleRequest $request, PermissionRole $permissionRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionRole $permissionRole)
    {
        //
    }
}
