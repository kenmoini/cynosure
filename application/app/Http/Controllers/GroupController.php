<?php

namespace App\Http\Controllers;

use App\Group;
use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::with('organizations')->get();

        return view('system.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::all();
        return view('system.groups.create', compact('organizations'));
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
            'name'=>'required'
        ]);

        $group = new Group([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'owner_id' => Auth::id()
        ]);

        $group->save();
        
        $group->organizations()->sync($request->get('organizations'));
        
        $group->save();

        return redirect()->route('admin.groups.index')->with('success', 'Group saved!');
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
        $group = Group::find($id);
        $organizations = Organization::all();
        return view('system.groups.edit', compact(['group', 'organizations']));
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
            'name'=>'required'
        ]);

        $group = Group::find($id);
        $group->name = $request->get('name');
        $group->description = $request->get('description');
        $group->owner_id = Auth::id();
        $group->save();
        $group->organizations()->sync($request->get('organizations'));
        $group->save();

        return redirect()->route('admin.groups.index')->with('success', 'Group updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();

        return redirect()->route('admin.groups.index')->with('success',  'Group deleted!');
    }
}
