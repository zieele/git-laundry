<?php

namespace App\Http\Controllers;

use App\Models\tb_transaksi;
use App\Http\Requests\Storetb_transaksiRequest;
use App\Http\Requests\Updatetb_transaksiRequest;

class TbTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data['title'] = 'Transaksi';
        
            return view('transaksi/index', $data);
        }
    }
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
     * @param  \App\Http\Requests\Storetb_transaksiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_transaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_transaksi  $tb_transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(tb_transaksi $tb_transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_transaksi  $tb_transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_transaksi $tb_transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_transaksiRequest  $request
     * @param  \App\Models\tb_transaksi  $tb_transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_transaksiRequest $request, tb_transaksi $tb_transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_transaksi  $tb_transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_transaksi $tb_transaksi)
    {
        //
    }
}
