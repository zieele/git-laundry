<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Http\Requests\StorePaketRequest;
use App\Http\Requests\UpdatePaketRequest;
use App\Models\Outlet;
use Maatwebsite\Excel\Facades\Excel;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('paket.index', [
            'title' => 'Daftar Paket',
            'export' => 'paket',
            'items' => Paket::join('tb_outlet', 'tb_paket.id_outlet', '=', 'tb_outlet.id')->select('tb_paket.*', 'tb_outlet.nama')->latest()->paginate(8),
            'outlets' => Outlet::orderBy('nama')->get()
        ]);
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
     * @param  \App\Http\Requests\StorePaketRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaketRequest $request)
    {
        Paket::create($request->all());

        return redirect()->back()->with('success','Data Berhasil ditambahkan.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaketRequest  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaketRequest $request, Paket $paket)
    {
        $paket->update($request->all());

        return redirect()->back()->with('success','Data Berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        $paket->delete();

        return redirect()->back()->with('success','Data Berhasil dihapus.');;
    }
    
    public function export() 
    {
        $date = date('Y-m-d');
        return Excel::download(new PaketController, $date.'_paket.xlsx');
    }
}
