<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Junges\ACL\Http\Models\Permission;
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
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('users.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string','email', 'max:255', 'unique:users' ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->syncPermissions($request['permissions']);

        return redirect('users')->with('success', 'User erfolgreich erstellt!');
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
        $user = User::findOrFail($id);

        $permissions = Permission::all();

        return view('users.edit', compact('user','permissions'));
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
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string','email', 'max:255'],
        ]);

        $user = User::findOrFail($id);

        if($user->email != $data['email'] && $user->name != $data['name']){
            User::whereId($id)->update([
                'name' => $data['name'],
                'email' => $data['email'],
            ]);
        }elseif($user->email != $data['email']){
            User::whereId($id)->update([
                'email' => $data['email'],
            ]);
        }elseif($user->name != $data['name']){
            User::whereId($id)->update([
                'name' => $data['name'],
            ]);
        }

        if($request['permissions'] == null){
            $user->revokeAllPermissions();
        }else{
            $user->syncPermissions($request['permissions']);
        }

        return redirect('users')->with('success', 'User erfolgreich editiert!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->revokeAllPermissions();

        $user->delete();

        return redirect('users')->with('success', 'User erfolgreich gelöscht!');
    }
}
