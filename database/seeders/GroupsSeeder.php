<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create([
            'name' => 'Principiante',
        ]);

        Group::create([
            'name' => 'Intermedio',
        ]);

        Group::create([
            'name' => 'Avanzado',
        ]);
    }
}
