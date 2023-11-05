<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controllers\Middleware;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserAdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('role:admins',['only'=>['index']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with('roles')->with('permissions')->get();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        $role = Role::get();
        $all_role = $user->roles->first();
        return view('admin.user.show', compact('user', 'role', 'all_role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function insert_roleuser(Request $request, string $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $user->syncRoles($data['role']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
