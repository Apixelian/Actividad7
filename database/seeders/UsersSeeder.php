<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\Group;


class UsersSeeder extends Seeder
{ 

    public function run(): void
    {
        User::create([
            'username' => 'Admon.',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => 1, // Administrativo
            'group_id' => null
        ]);

        User::create([
            'username' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => 2, // Maestro
            'group_id' => null
        ]);

        User::create([
            'username' => 'Student',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role_id' => 3, // Estudiante
            'group_id' => 1 // Para el grupo "Principiante"
        ]);
    }
}
