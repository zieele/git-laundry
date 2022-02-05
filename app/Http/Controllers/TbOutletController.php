<?php

namespace App\Http\Controllers;

use App\Models\TbOutlet;
use App\Http\Requests\StoreTbOutletRequest;
use App\Http\Requests\UpdateTbOutletRequest;

class TbOutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = TbOutlet::orderBy('id','desc')->paginate(10);
        $data['title'] = 'Outlet';
    
        return view('outlet.index', $data);
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
     * @param  \App\Http\Requests\StoreTbOutletRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTbOutletRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TbOutlet  $tbOutlet
     * @return \Illuminate\Http\Response
     */
    public function show(TbOutlet $tbOutlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TbOutlet  $tbOutlet
     * @return \Illuminate\Http\Response
     */
    public function edit(TbOutlet $tbOutlet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTbOutletRequest  $request
     * @param  \App\Models\TbOutlet  $tbOutlet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTbOutletRequest $request, TbOutlet $tbOutlet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TbOutlet  $tbOutlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(TbOutlet $tbOutlet)
    {
        //
    }
}
