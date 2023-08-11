<?php

namespace App\Http\Controllers;

use App\Models\Sanction;
use Illuminate\Http\Request;

class SanctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.report.sanctions.index', [
            'sanctions' => Sanction::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.report.sanctions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_sanksi' => 'required',
            'kategori_sanksi' => 'required',
        ]);

        Sanction::create($data);

        sweetalert()->addSuccess('Berhasil menambahkan data.');

        return redirect()->route('sanctions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sanction $sanction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sanction $sanction)
    {
        return view('dashboard.report.sanctions.edit', [
            'sanction' => $sanction,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sanction $sanction)
    {
        $data = $request->validate([
            'nama_sanksi' => 'required',
            'kategori_sanksi' => 'required',
        ]);

        $sanction->update($data);

        sweetalert()->addSuccess('Berhasil mengubah data.');

        return redirect()->route('sanctions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sanction $sanction)
    {
        $sanction->delete();

        sweetalert()->addSuccess('Berhasil menghapus data.');

        return redirect()->route('sanctions.index');
    }
}
