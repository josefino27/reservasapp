<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clase;

class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::factory(5)->create();
    }
}
