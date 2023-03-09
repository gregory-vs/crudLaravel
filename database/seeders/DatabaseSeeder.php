<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(ClienteTableSeeder::class);
    }
}
