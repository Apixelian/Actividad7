<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kit;

class KitsSeeder extends Seeder
{

    public function run(): void
    {
        Kit::create([
            'name' => 'Starter Kit',
        ]);

        Kit::create([
            'name' => 'Educational Robotics Kit',
        ]);

        Kit::create([
            'name' => 'Kit5',
        ]);
    }
}
