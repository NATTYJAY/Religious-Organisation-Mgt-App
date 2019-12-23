<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersCreateRequest;
use App\Http\Requests\UsersEditRequest;
use App\Role ;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $roles = Role::all();
    return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersCreateRequest $request)
    {
        $user = new User();
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->role_id = trim($request->role_id);
        $user->password = trim(bcrypt($request->password));
        $user->phone = trim($request->phone);
        $saveAll = $user->save();
            if($saveAll){
                 Session::flash('user_inserted', 'User Successfully Registered');
                  return redirect('/user/create');
            }else{
                Session::flash('user_not_inserted', 'User Could not Registered');
                return redirect('/user/create');
            }
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
        //return view('admin.users.create');
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
        $user = User::findOrFail($id);
        $roless = Role::all();
        return view('admin.users.edit',compact('user','roless'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        //
        //$user = User::findOrFail($id);
        $user = User::findOrFail($id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->role_id = trim($request->role_id);
        $user->phone = trim($request->phone);
        $updateAll = $user->save();
            if($updateAll){
                 Session::flash('user_updated', 'User Successfully Updated');
                  return redirect('/user');
            }else{
                Session::flash('user_not_updated', 'User Could not be Updated');
                return redirect('/user');
            }
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

         $user = User::findOrFail($id);
        $user->delete();
        Session::flash('deleted_user', 'User has been deleted');
        if($user){
            return redirect('/user');
        }
    }
}
