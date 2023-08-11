<?php

namespace App\Http\Controllers;

use App\Models\Violation;
use Illuminate\Http\Request;

class ViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.report.violations.index', [
            'violations' => Violation::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.report.violations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_pelanggaran' => 'required',
            'kategori_pelanggaran' => 'required |in:ringan,sedang,berat',
        ]);

        Violation::create($data);

        sweetalert()->addSuccess('Berhasil menambahkan data.');

        return redirect()->route('violations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Violation $violation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Violation $violation)
    {
        return view('dashboard.report.violations.edit', [
            'violation' => $violation,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Violation $violation)
    {
        $data = $request->validate([
            'nama_pelanggaran' => 'required',
            'kategori_pelanggaran' => 'required |in:ringan,sedang,berat',
        ]);

        $violation->update($data);

        sweetalert()->addSuccess('Berhasil mengubah data.');

        return redirect()->route('violations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Violation $violation)
    {
        $violation->delete();

        sweetalert()->addSuccess('Berhasil menghapus data.');

        return redirect()->route('violations.index');
    }
}
