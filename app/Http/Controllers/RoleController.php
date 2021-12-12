<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $p = role::all();
        // return view('role',['p'=>$p],["title" => "role"]);
<<<<<<< HEAD
        
=======
>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501
        $role = Role::all();
        return view('dashboard.role.role',[
            'title' => 'Role',
            'role'=> $role
        ]);
<<<<<<< HEAD
            
=======
>>>>>>> a20750d53f7f0cd4e236a6dfbd243cfef90aa501
    }

    public function tambah()
    {
     
        // memanggil view tambah
        return view('dashboard.role.tambahrole');
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('Role')->insert([
            'id_role'=>$request->id_role,
            'name'=>$request->role
        ]);
        return redirect('/role');

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
