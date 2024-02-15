<?php

namespace App\Livewire;

use App\Models\Diagnosa;
use App\Models\Kelompok;
use Livewire\Component;

class CloneFormDiagnosa extends Component
{
    public $inputs = [];
    public $kelompoks;
    public $selectedKelompok;
    public $kodeDiagnosa;
    public $namaDiagnosa;
    public $deskripsiDiagnosa;
    public $kodeSLKI;
    public $namaSLKI;
    public $deskripsiSLKI;

    public function mount() {
        $this->addNew();
        $this->kelompoks = Kelompok::all();
    }

    public function addNew() {
        $this->inputs[] = [];
    }

    public function remove($index) {
        unset($this->inputs[$index]);
        $this->inputs = array_values($this->inputs);
    }

    public function store(){
        $this->validate([
            'selectedKelompok' => 'required',
            'kodeDiagnosa' => 'required',
            'namaDiagnosa' => 'required',
            'deskripsiDiagnosa' => 'required',
            'kodeSLKI' => 'required',
            'namaSLKI' => 'required',
            'deskripsiSLKI' => 'required',
            'inputs.*.kode_siki'=> 'required',
            'inputs.*.nama_siki'=> 'required',
            'inputs.*.deskripsi_siki'=> 'required',
            'inputs.*.observasi' => 'nullable',
            'inputs.*.terapeutik' => 'nullable',
            'inputs.*.edukasi' => 'nullable',
        ]);
        
        foreach($this->inputs as $input){
            $diagnosa = new Diagnosa();
            $diagnosa->kelompoks_id = $this->selectedKelompok;
            $diagnosa->kode_diagnosa = $this->kodeDiagnosa;
            $diagnosa->nama_diagnosa = $this->namaDiagnosa;
            $diagnosa->deskripsi_diagnosa = $this->deskripsiDiagnosa;
            $diagnosa->kode_slki = $this->kodeSLKI;
            $diagnosa->nama_slki = $this->namaSLKI;
            $diagnosa->deskripsi_slki = $this->deskripsiSLKI;
            $diagnosa->kode_siki = $input['kode_siki'];
            $diagnosa->nama_siki = $input['kode_siki'];
            $diagnosa->deskripsi_siki = $input['deskripsi_siki'];
            $diagnosa->observasi = $input['observasi'];
            $diagnosa->terapeutik = $input['terapeutik'];
            $diagnosa->edukasi = $input['edukasi'];
            $diagnosa->save();
        }

        return redirect('/diagnosa');
    }

    public function render()
    {
        return view('livewire.clone-form-diagnosa', [
            'kelompoks' => Kelompok::all(),
        ]);
    }
}
