<?php

namespace App\Http\Controllers;

use App\Models\DataOfViolation;
use Illuminate\Http\Request;

class DataOfViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.report.data-of-violations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.report.data-of-violations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
