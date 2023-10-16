<?php

namespace Database\Seeders;

use Database\Factories\empleadoFactory;
use Illuminate\Database\Seeder;

class empleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        empleadoFactory::factory()->count(100)->create();
    }
}
