<?php

namespace App\Http\Controllers;

use App\Exports\OutletExport;
use App\Models\Outlet;
use App\Http\Requests\StoreOutletRequest;
use App\Http\Requests\UpdateOutletRequest;
use App\Http\Controllers\Session;
use App\Imports\OutletImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('outlet.index', [
            'title' => 'Daftar Outlet',
            'export' => 'outlet',
            'items' => Outlet::latest()->paginate(8)
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
     * @param  \App\Http\Requests\StoreOutletRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutletRequest $request)
    {
        Outlet::create($request->all());

        return redirect()->back()->with('success','Data Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit(Outlet $outlet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutletRequest  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutletRequest $request, Outlet $outlet)
    {
        $outlet->update($request->all());

        return redirect()->back()->with('success','Data Berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        $outlet->delete();

        return redirect()->back()->with('success','Data Berhasil dihapus.');
    }
    
    public function export() 
    {
        $date = date('Y-m-d');
        return Excel::download(new OutletExport, $date.'_outlet.xlsx');
    }
    
    public function import(Request $request) 
    {
		$file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('file',$nama_file);
		Excel::import(new OutletImport, public_path('/file/'.$nama_file));
		return redirect('/outlet');
    }
}
