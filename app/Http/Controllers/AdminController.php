<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$services = Services::all();
        $services = DB::table('services')
                ->select('*')
                ->orderBy('id', 'desc')
                ->get();
        return view('admin.index',compact('services'));
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

// function to count accepted request
     public function count_accepted(){
        $counted = DB::table('services')
                ->where('status', 1)
                ->count();
                return $counted;
    }
     //function to count rejected request
     public function count_rejected(){
        $counted = DB::table('services')
                ->where('status', 2)
                ->count();
                return $counted;
    }

    //function to count pending request
     public function count_pending(){
        $counted = DB::table('services')
                ->where('status', 0)
                ->count();
                return $counted;
    }

     public function count_user(){
        $counted = DB::table('users')
                ->where('role_id', 2)
                ->count();
                return $counted;
    }

    public function count_admin(){
        $counted = DB::table('users')
                ->where('role_id', 1)
                ->count();
                return $counted;
    }
}
