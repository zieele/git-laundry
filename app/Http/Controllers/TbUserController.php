<?php

namespace App\Http\Controllers;

use App\Models\tb_user;
use App\Http\Requests\Storetb_userRequest;
use App\Http\Requests\Updatetb_userRequest;

class TbUserController extends Controller
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
     * @param  \App\Http\Requests\Storetb_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_user  $tb_user
     * @return \Illuminate\Http\Response
     */
    public function show(tb_user $tb_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_user  $tb_user
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_user $tb_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_userRequest  $request
     * @param  \App\Models\tb_user  $tb_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_userRequest $request, tb_user $tb_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_user  $tb_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_user $tb_user)
    {
        //
    }
}
