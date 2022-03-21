<?php

namespace App\Http\Controllers;

use App\Exports\PenjemputanExport;
use App\Models\Penjemputan;
use App\Http\Requests\StorePenjemputanRequest;
use App\Http\Requests\UpdatePenjemputanRequest;
use App\Imports\PenjemputanImport;
use App\Models\Member;
use App\Models\Outlet;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PenjemputanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['items'] = Penjemputan::join('tb_outlet', 'tb_penjemputan.id_outlet', '=', 'tb_outlet.id')->join('tb_member', 'tb_penjemputan.id_member', '=', 'tb_member.id')->select('tb_penjemputan.*', 'tb_outlet.nama', 'tb_member.nama_member', 'tb_member.alamat_member', 'tb_member.tlp_member')->get();
        $data['outlets'] = Outlet::orderBy('nama')->get();
        $data['members'] = Member::orderBy('nama_member')->get();
        $data['export'] = 'penjemputan';
        $data['title'] = 'Page Penjemputan';
        return view('penjemputan.index')->with($data);
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
     * @param  \App\Http\Requests\StorePenjemputanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenjemputanRequest $request)
    {
        Penjemputan::create($request->all());
        // dd($request->all());
        return redirect()->back()->with('success','Data Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjemputan  $penjemputan
     * @return \Illuminate\Http\Response
     */
    public function show(Penjemputan $penjemputan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjemputan  $penjemputan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjemputan $penjemputan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenjemputanRequest  $request
     * @param  \App\Models\Penjemputan  $penjemputan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenjemputanRequest $request, Penjemputan $penjemputan)
    {
        $penjemputan->update($request->all());

        return redirect()->back()->with('success','Data Berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjemputan  $penjemputan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penjemputan $penjemputan)
    {
        $penjemputan->delete();

        return redirect()->back()->with('success','Data Berhasil dihapus.');
    }
    
    public function export() 
    {
        $date = date('Y-m-d');
        return Excel::download(new PenjemputanExport, $date.'_penjemputan.xlsx');
    }
    
    public function import(Request $request) 
    {
		$file = $request->file('file');
		$nama_file = rand().$file->getClientOriginalName();
		$file->move('file',$nama_file);
		Excel::import(new PenjemputanImport, public_path('/file/'.$nama_file));
		return redirect('/penjemputan')->with('success','Data Berhasil diimoport.');
    }
}