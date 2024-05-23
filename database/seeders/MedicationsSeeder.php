<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medications;

class MedicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Definicion de la data
        $medications = [
            ['name' => 'Panadol', 'description' => 'Analgesico', 'price' => 10.00],
            ['name' => 'Penicilina', 'description' => 'Antibiotico', 'price' => 20.00],
            ['name' => 'Novalgina', 'description' => 'Analgesico', 'price' => 30.00],
            ['name' => 'Neurobion', 'description' => 'Vitamina', 'price' => 40.00],
            ['name' => 'Diclofenac', 'description' => 'Analgesico', 'price' => 50.00],
        ];

        // Insertar la data a la tabla medication
        foreach ($medications as $medication) {
            Medications::create($medication);
        }
    }
}
