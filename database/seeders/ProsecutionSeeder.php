<?php

namespace Database\Seeders;

use App\Models\Prosecution;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProsecutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prosecution::factory(50)->create();
    }
}