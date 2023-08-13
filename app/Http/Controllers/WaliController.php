<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $wali = User::where('role', '=', 'wali')->with('santri')->get();
        // return $wali;
        return view('dashboard.master-data.wali.index', [
            'wali' => User::where('role', '=', 'wali')->with('santri')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.master-data.wali.create');
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
            'alamat' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        $data['role'] = 'wali';

        User::create($data);

        sweetalert()->addSuccess('Berhasil menambahkan data.');

        return redirect()->route('wali.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.master-data.wali.edit', [
            'wali' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $wali)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        $wali->update($data);

        sweetalert()->addSuccess('Berhasil mengubah data.');

        return redirect()->route('wali.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        sweetalert()->addSuccess('Berhasil menghapus data.');

        return redirect()->route('wali.index');
    }
}
