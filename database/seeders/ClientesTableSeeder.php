<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'João Silva',
            'telefone' => '(11) 1234-5678',
            'email' => 'joao@example.com',
        ]);

        Cliente::create([
            'nome' => 'Maria Souza',
            'telefone' => '(22) 9876-5432',
            'email' => 'maria@example.com',
        ]);
    }
}
