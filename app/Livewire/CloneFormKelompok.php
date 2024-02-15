<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kelompok;

class CloneFormKelompok extends Component
{
    public $inputs = [];

    public function mount() {
        $this->addNew();
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
            'inputs.*.name'=> 'required'
        ]);

        foreach($this->inputs as $input){
            Kelompok::create($input);
        }

        return redirect('/diagnosa');
    }

    public function render()
    {
        return view('livewire.clone-form-kelompok');
    }
}
