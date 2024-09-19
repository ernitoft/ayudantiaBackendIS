<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'ernes.fuenzalida@alumnos.ucn.cl',
            'password' => '123',
            'role_id' => Role::where('name', 'Administrador')->first()->id,
        ]);
    }
}
