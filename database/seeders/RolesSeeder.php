<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'Administrativo',
        ]);

        Role::create([
            'name' => 'Maestro',
        ]);

        Role::create([
            'name' => 'Estudiante',
        ]);
    }
}
