<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
            // $p = provinsi::all();
            // return view('dashboard.provinsi',['p'=>$p],["title" => "Provinsi"]);

=======
            //  $p = provinsi::all();
            //  return view('provinsi',['p'=>$p],["title" => "Provinsi"]);
            //return view('dashboard.provinsi.provinsi'); 
            
>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501
            $provinsis = Provinsi::all();
            return view('dashboard.provinsi.provinsi',[
                'title' => 'Provinsi',
                'provinsis'=> $provinsis
<<<<<<< HEAD
                
            ]);
             
=======
>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$provinsis = DB::table('provinsis')->get();
       // return $provinsis;
        //return view('dashboard.provinsi.provinsi',['provinsis'=>$provinsis]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
