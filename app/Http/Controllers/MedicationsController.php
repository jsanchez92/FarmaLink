<?php

namespace App\Http\Controllers;

use App\Models\Medications;
use Illuminate\Http\Request;

class MedicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public $medicationList;

    public function mount()
    {
        $this->medicationList = Medications::all();
    }

    public function render()
    {
        return view('livewire.medication-list', [
            'medicationList' => $this->medicationList,
        ]);
    }
    public function index()
    {
        $medicationList = Medications::all();
        return view('livewire.medication-list',compact('medicationList'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Medications $medications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medications $medications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medications $medications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medications $medications)
    {
        //
    }
}
