<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.master-data.santri.index', [
            'santris' => Santri::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.master-data.santri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nis' => 'required',
            'nama_santri' => 'required',
            'jenis_kelamin' => 'required',
            // 'nama_wali' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Santri::create($data);

        sweetalert()->addSuccess('Berhasil menambahkan data.');

        return redirect()->route('santri.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Santri $santri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Santri $santri)
    {
        return view('dashboard.master-data.santri.edit', [
            'santri' => $santri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Santri $santri)
    {
        $data = $request->validate([
            'nis' => 'required',
            'nama_santri' => 'required',
            'jenis_kelamin' => 'required',
            // 'nama_wali' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $santri->update($data);

        sweetalert()->addSuccess('Berhasil mengubah data.');

        return redirect()->route('santri.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Santri $santri)
    {
        $santri->delete();

        sweetalert()->addSuccess('Berhasil menghapus data.');

        return redirect()->route('santri.index');
    }
}
