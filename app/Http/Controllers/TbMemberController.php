<?php

namespace App\Http\Controllers;

use App\Models\tb_member;
use App\Http\Requests\Storetb_memberRequest;
use App\Http\Requests\Updatetb_memberRequest;

class TbMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $data['title'] = 'Member';
        
            return view('member/index', $data);
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
     * @param  \App\Http\Requests\Storetb_memberRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetb_memberRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tb_member  $tb_member
     * @return \Illuminate\Http\Response
     */
    public function show(tb_member $tb_member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tb_member  $tb_member
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_member $tb_member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetb_memberRequest  $request
     * @param  \App\Models\tb_member  $tb_member
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetb_memberRequest $request, tb_member $tb_member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tb_member  $tb_member
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_member $tb_member)
    {
        //
    }
}
