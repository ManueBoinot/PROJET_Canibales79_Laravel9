<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discipline::create([
            'discipline' => 'Canicross / Canimarche'
        ]);

        Discipline::create([
            'discipline' => 'Canivtt / Canitrott'
        ]);
    }
}
