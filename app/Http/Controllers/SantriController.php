<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\User;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        if (!empty($search)) {
            $data = Santri::where('nama_santri', 'like', '%' . $search . '%')
                ->with('wali')->get();
        } else {
            $data = Santri::with('wali')->get();
        }
        return view('dashboard.master-data.santri.index', [
            // $data => Santri::with('wali')->get(),
            'santris' => $data,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.master-data.santri.create', [
            'wali' => User::where('role', '=', 'wali')->get(),
        ]);
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
            'wali_id' => 'nullable',
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
        return view('dashboard.master-data.santri.show', [
            'santri' => $santri->load('dataOfViolations'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Santri $santri)
    {
        return view('dashboard.master-data.santri.edit', [
            'santri' => $santri,
            'wali' => User::where('role', '=', 'wali')->get(),
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
            'wali_id' => 'nullable',
        ]);
        $data['wali_id'] = $request->wali_id;

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
