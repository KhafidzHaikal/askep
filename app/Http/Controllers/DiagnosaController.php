<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiagnosaRequest;
use App\Http\Requests\UpdateDiagnosaRequest;
use App\Models\Noc;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('diagnosa.index', [
            'title' => 'Diagnosa',
            'diagnosas' => Diagnosa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diagnosa.create', [
            'title' => 'Tambah Diagnosa',
        ]);
    }

    public function input()
    {
        return view('diagnosa.index-diagnosa', [
            'title' => 'Diagnosa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiagnosaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnosaRequest $request, Diagnosa $diagnosa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosa $diagnosa)
    {
        //
    }
}
