<?php

namespace App\Http\Controllers;

use App\Models\TUser;
use App\Http\Requests\StoreTUserRequest;
use App\Http\Requests\UpdateTUserRequest;

class TUserController extends Controller
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
     * @param  \App\Http\Requests\StoreTUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TUser  $tUser
     * @return \Illuminate\Http\Response
     */
    public function show(TUser $tUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TUser  $tUser
     * @return \Illuminate\Http\Response
     */
    public function edit(TUser $tUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTUserRequest  $request
     * @param  \App\Models\TUser  $tUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTUserRequest $request, TUser $tUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TUser  $tUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(TUser $tUser)
    {
        //
    }
}
