<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::all();

        return view('system.organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system.organizations.create');
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
            'name'=>'required',
            'domain'=>'required'
        ]);

        $organization = new Organization([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'domain' => $request->get('domain'),
            'owner_id' => Auth::id()
        ]);

        $organization->save();

        return redirect()->route('admin.organizations.index')->with('success', 'Organization saved!');
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
        $organization = Organization::find($id);
        return view('system.organizations.edit', compact('organization'));
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
            'domain'=>'required'
        ]);

        $organization = Organization::find($id);
        $organization->name = $request->get('name');
        $organization->description = $request->get('description');
        $organization->domain = $request->get('domain');
        $organization->owner_id = Auth::id();
        $organization->save();

        return redirect()->route('admin.organizations.index')->with('success', 'Organization updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organization = Organization::find($id);
        $organization->delete();

        return redirect()->route('admin.organizations.index')->with('success',  'Organization deleted!');
    }
}
