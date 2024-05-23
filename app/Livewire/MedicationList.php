<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Medications;
use Illuminate\Http\Request;

class MedicationList extends Component
{
    public $search="";

    public function render()
    {
        $result = Medications::where('name','like','%' . $this->search. '%')
            ->orwhere('description','like','%' . $this->search. '%')
            ->get();
        return view('livewire.medication-list', compact('result'))->layout('layouts.app');
    }
}
