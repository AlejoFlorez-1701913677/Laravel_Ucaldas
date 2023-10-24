<?php

namespace Database\Seeders;

use App\Models\Mascota;
use Illuminate\Database\Seeder;

class mascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mascota::factory(150)->create();
    }
}
