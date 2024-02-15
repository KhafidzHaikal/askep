<?php

namespace App\Http\Controllers;

use App\Models\Noc;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNocRequest;
use App\Http\Requests\UpdateNocRequest;
use App\Models\Diagnosa;

class NocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('diagnosa.noc', [
            'title' => 'Noc',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNocRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Noc $noc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Noc $noc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNocRequest $request, Noc $noc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noc $noc)
    {
        //
    }
}
