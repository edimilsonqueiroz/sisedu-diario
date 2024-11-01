<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Edimilson Francisco de Queiroz',
            'email' => 'edimilsonqueiroz681@gmail.com',
            'cpf'=> '00220832196',
            'password'=>bcrypt('efq170880'),
            'isAdmin'=>true,
            'isProfessor' => false,
            'isCoordenador' => false,
            'isSecretaria' => false,
            'active' =>true

        ]);
    }
}
