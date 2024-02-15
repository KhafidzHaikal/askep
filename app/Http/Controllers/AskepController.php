<?php

namespace App\Http\Controllers;

use App\Models\Askep;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAskepRequest;
use App\Models\Diagnosa;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AskepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('askep.index', [
            'title' => 'ASKEP',
            'askeps' => Askep::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('askep.create', [
            'title' => 'ASKEP',
            // 'kelompoks' => Kelompok::all(),
            'diagnosas' => Diagnosa::all(),
            'users' => User::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'diagnosas_id' => 'required',
            'tanggal' => 'required',
            'alamat' => 'required',
            'users_id' => 'required',
            'data' => 'required',
        ]);

        Askep::create($validateData);
        return redirect('/askep');
    }

    /**
     * Display the specified resource.
     */
    public function show(Askep $askep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Askep $askep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAskepRequest $request, Askep $askep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Askep $askep)
    {
        //
    }

    public function pdf(Askep $askep, User $user)
    {
        
        $pdf = Pdf::loadView('askep.print', ['askep' => ($askep), 'user' => ($user), 'title' => 'Askep'])->setPaper('a4');
        // return $pdf->download('pasienPDF.pdf');
        return $pdf->stream('kajian-pasienPDF.pdf');
    }
}
