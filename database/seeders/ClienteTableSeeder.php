<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Test User',
            'cpf' => '410.580.260-70',
            'dt_nasc' => '1978-03-03',
            'sexo' => 'm',
            'endereco' => 'Rua 3, numero 4',
            'estado' => 'PR',
            'cidade' => 'Curitiba',
            'cep' => '31975781',
        ]);

        Cliente::create([
            'nome' => 'Test User 2',
            'cpf' => '400.399.300-41',
            'dt_nasc' => '1978-12-30',
            'sexo' => 'f',
            'endereco' => 'Rua 4, numero 5',
            'estado' => 'BA',
            'cidade' => 'Salvador',
            'cep' => '57844365',
        ]);

        Cliente::create([
            'nome' => 'Test User 3',
            'cpf' => '817.604.160-29',
            'dt_nasc' => '1978-04-12',
            'sexo' => 'm',
            'endereco' => 'Rua 3, numero 4',
            'estado' => 'MG',
            'cidade' => 'Belo Horizonte',
            'cep' => '31254780',
        ]);
    }
}
