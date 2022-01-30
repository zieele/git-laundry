<?php

namespace App\Http\Controllers;

use App\Models\tb_outlet;
use Illuminate\Http\Request;
use App\Http\Requests\Updatetb_outletRequest;

class TbOutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = tb_outlet::orderBy('id','desc')->paginate(10);
        $data['title'] = 'Outlet';
    
        return view('outlet/index', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required'
        ]);
        $item = new tb_outlet();
        $item->nama = $request->nama;
        $item->alamat = $request->alamat;
        $item->tlp = $request->tlp;
        $item->save();
     
        return redirect()->route('outlet.index')->with('success','Outlet telah ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function show(tb_outlet $tb_outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_outlet $tb_outlet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tb_outlet)
    {
        // dd($request->nama);
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tlp' => 'required'
        ]);
        
        $item = tb_outlet::find($tb_outlet);
        $item->nama = $request->nama;
        $item->alamat = $request->alamat;
        $item->tlp = $request->tlp;
        $item->save();
    
        return redirect()->back()->with('success','Data outlet telah diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_outlet  $tb_outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_outlet $tb_outlet)
    {
        $tb_outlet->delete();
    
        return redirect()->back()->with('success','Data outlet telah di hapus.');
    }
}
