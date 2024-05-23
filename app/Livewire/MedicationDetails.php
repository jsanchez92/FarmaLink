<?php

namespace App\Livewire;

use Livewire\Component;

class MedicationDetails extends Component
{
    public $open=true;
    public function render()
    {
        return view('livewire.medication-details');
    }
}
