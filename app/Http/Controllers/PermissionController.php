<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class PermissionController extends Controller
{
    function __construct()
    {
         $this->middleware('auth');
         /*$this->middleware('permission:role-list');
         $this->middleware('permission:role-create', ['only' => ['create','store']]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy']]);*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::orderBy('id','DESC')->get();
        $roles = Role::all();
        return view('dashboard.permissions.index',compact('permissions','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        $permission = Permission::get();
        return view('dashboard.permissions.create-edit',compact('permission', 'edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permission = Permission::create(['name' => $request->input('name')]);
        $permission->syncPermissions($request->input('permission'));

        return redirect()->route('permissions.index')
                        ->with('success','permission created successfully');
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
        if (Permission::find($id)->delete()) {
            $permissions = Permission::orderBy('id','DESC')->get();
            $roles = Role::all();
            return response()->json([
                'success' => true,
                'message' => 'Permission has been  deleted',
                'view' => view('dashboard.permissions.list',compact('permissions','roles'))->render()
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'There was an error deleting'                
            ]);
        }
    }

    public function savePermissions(Request $request)
    {
        $llaves = [];
        $roles = $request->get('roles');
        foreach ($roles as $key => $value) {
            $rolesId = Role::find($key);
            $rolesId->syncPermissions($value);
        }

        return back()->with('success', 'Permissions updated successfully');
    }
}
