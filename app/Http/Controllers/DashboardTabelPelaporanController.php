<?php

namespace App\Http\Controllers;

use App\Models\TabelPelaporan;
use Illuminate\Http\Request;

class DashboardTabelPelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TabelPelaporan  $tabelPelaporan
     * @return \Illuminate\Http\Response
     */
    public function show(TabelPelaporan $tabelPelaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TabelPelaporan  $tabelPelaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(TabelPelaporan $tabelPelaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TabelPelaporan  $tabelPelaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TabelPelaporan $tabelPelaporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TabelPelaporan  $tabelPelaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TabelPelaporan $tabelPelaporan)
    {
        //
    }
}
