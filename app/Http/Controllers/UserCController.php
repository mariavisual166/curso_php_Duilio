<?php

namespace App\Http\Controllers;

use App\userC;
use App\profession;
use Illuminate\Http\Request;
use App;

class UserCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = userC::all();
        return view('user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $professions = profession::all();
         return view('create',compact('professions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:user_c_s,email'],
            'password' => '',
            'profession_id' => '',
        ],[
            'name.require' => 'el name es obligatorio',
            'email.require' => 'el email es obligatorio',
        ]);
        $user = new userC($validate);
        $user->password = bcrypt($validate['password']);
        $user->save(); 
       return redirect()->route('user.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userC  $userC
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = userC::findOrFail($id);


        return view('show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userC  $userC
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = userC::findOrFail($id);
        $professions = profession::all();
        return view('update',compact('user','professions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userC  $userC
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = userC::findOrFail($id);
        $validate = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => '',
            'profession_id' => '',
        ],[
            'name.require' => 'el name es obligatorio',
            'email.require' => 'el email es obligatorio',
        ]);
      
         $user->update( $validate);
         return redirect()->route('user.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userC  $userC
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = userC::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index'); 
    }
}
