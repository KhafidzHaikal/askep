<?php

namespace App\Livewire;

use App\Models\Diagnosa;
use App\Models\Noc;
use Livewire\Component;

class CloneFormNoc extends Component
{
    public $inputs = [];
    public $diagnosas;
    public $selectedDiagnosas;

    public function mount() {
        $this->diagnosas = Diagnosa::all();
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
            'inputs.*.kode_noc'=> 'required',
            'inputs.*.deskripsi_noc'=> 'required',
            'selectedDiagnosas' => 'required',
        ]);
        
        foreach($this->inputs as $input){
            $noc = new Noc();
            $noc->diagnosas_id = $this->selectedDiagnosas;
            $noc->kode_noc = $input['kode_noc'];
            $noc->deskripsi_noc = $input['deskripsi_noc'];
            $noc->save();
        }

        return redirect('/diagnosa');
    }

    public function render()
    {
        return view('livewire.clone-form-noc', [
            'diagnosas' => Diagnosa::all(),
        ]);
    }
}
