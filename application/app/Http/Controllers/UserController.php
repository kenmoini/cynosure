<?php

namespace App\Http\Controllers;

use App\Group;
use App\Organization;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with(['groups', 'roles'])->get();

        return view('system.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::with('groups')->get();
        $groups = Group::all();
        $roles = Role::all();
        return view('system.users.create', compact(['groups', 'roles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        $user->save();
        
        $user->groups()->sync($request->get('groups'));
        $user->roles()->sync($request->get('roles'));
        
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usershow = User::where('id', $id)->with(['groups', 'roles'])->first();
        return view('system.users.show', compact(['usershow']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $useredit = User::where('id',$id)->with(['groups', 'roles'])->first();
        $groups = Group::all();
        $roles = Role::all();
        return view('system.users.edit', compact(['useredit', 'groups', 'roles']));
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
        $request->validate([
            'name'=>'required',
            'email' => 'required'
        ]);

        $user = User::where('id', $id)->first();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->save();

        $user->groups()->sync($request->get('groups'));
        $user->roles()->sync($request->get('roles'));

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success',  'User deleted!');
    }
}
