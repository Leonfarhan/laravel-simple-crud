<?php

namespace Database\Seeders;

use App\Models\Universe;
use Illuminate\Database\Seeder;

class UniverseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Universe::factory()->count(10)->create();
    }
}
