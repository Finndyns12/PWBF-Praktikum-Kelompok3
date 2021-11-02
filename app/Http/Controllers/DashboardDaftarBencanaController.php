<?php

namespace App\Http\Controllers;

use App\Models\DaftarBencana;
use Illuminate\Http\Request;

class DashboardDaftarBencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.daftarbencana.index');
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
     * @param  \App\Models\DaftarBencana  $daftarBencana
     * @return \Illuminate\Http\Response
     */
    public function show(DaftarBencana $daftarBencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DaftarBencana  $daftarBencana
     * @return \Illuminate\Http\Response
     */
    public function edit(DaftarBencana $daftarBencana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DaftarBencana  $daftarBencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DaftarBencana $daftarBencana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DaftarBencana  $daftarBencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(DaftarBencana $daftarBencana)
    {
        //
    }
}
