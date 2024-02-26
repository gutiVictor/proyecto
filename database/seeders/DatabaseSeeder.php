<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alumno;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {

        $this->call(TipoAsistenciaSeeder::class);
        Alumno::factory(10)->create();
        $this->call(CursoSeeder::class);        
        $this->call(AsistenciaSeeder::class);
        $this->call(DocenteSeeder::class);
        




















        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
