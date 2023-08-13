<?php

namespace App\Http\Controllers;

use App\Models\DataOfViolation;
use App\Models\Sanction;
use App\Models\Santri;
use App\Models\Violation;
use Illuminate\Http\Request;

class DataOfViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataOfViolations = DataOfViolation::with([
            'santri',
            'pelanggaran',
            'sanksi',
        ])->get();
        return $dataOfViolations;
        return view('dashboard.report.data-of-violations.index', [
            'dataOfViolations' => DataOfViolation::with([
                'santri',
                'pelanggaran',
                'sanksi',
            ])->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.report.data-of-violations.create', [
            'santri' => Santri::all(),
            'pelanggaran' => Violation::all(),
            'sanksi' => Sanction::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'santri_id' => 'required|exists:santris,id',
            'violation_id' => 'required|exists:violations,id',
            'sanction_id' => 'required|exists:sanctions,id',
        ]);
        // return $data;
        DataOfViolation::create($data);

        sweetalert()->addSuccess('Berhasil menambahkan data.');

        return redirect()->route('data-of-violations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataOfViolation $dataOfViolation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataOfViolation $dataOfViolation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataOfViolation $dataOfViolation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataOfViolation $dataOfViolation)
    {
        //
    }
}
