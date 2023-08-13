<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.master-data.users.index', [
            'users' => User::where('role', '=', 'admin')
                ->orWhere('role', '=', 'petugas')
                ->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.master-data.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'no_telp' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        sweetalert()->addSuccess('Berhasil menambahkan data.');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.master-data.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'no_telp' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user->update($data);

        sweetalert()->addSuccess('Berhasil mengubah data.');

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        sweetalert()->addSuccess('Berhasil menghapus data.');

        return redirect()->route('users.index');
    }
}
