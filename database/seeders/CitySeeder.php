<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
                   // Quindío
                   ['state_id' => 1, 'name' => 'Armenia', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 1, 'name' => 'Calarcá', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 1, 'name' => 'Salento', 'created_at' => now(), 'updated_at' => now()],
                   
                   // Cundinamarca
                   ['state_id' => 2, 'name' => 'Bogotá', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 2, 'name' => 'Soacha', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 2, 'name' => 'Girardot', 'created_at' => now(), 'updated_at' => now()],
       
                   // Chocó
                   ['state_id' => 3, 'name' => 'Quibdó', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 3, 'name' => 'Istmina', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 3, 'name' => 'Condoto', 'created_at' => now(), 'updated_at' => now()],
                   
                   // Norte de Santander
                   ['state_id' => 4, 'name' => 'Cúcuta', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 4, 'name' => 'Ocaña', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 4, 'name' => 'Pamplona', 'created_at' => now(), 'updated_at' => now()],
                   
                   // Meta
                   ['state_id' => 5, 'name' => 'Villavicencio', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 5, 'name' => 'Acacías', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 5, 'name' => 'Granada', 'created_at' => now(), 'updated_at' => now()],
                   
                   // Risaralda
                   ['state_id' => 6, 'name' => 'Pereira', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 6, 'name' => 'Dosquebradas', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 6, 'name' => 'Santa Rosa de Cabal', 'created_at' => now(), 'updated_at' => now()],
       
                   // Atlántico
                   ['state_id' => 7, 'name' => 'Barranquilla', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 7, 'name' => 'Soledad', 'created_at' => now(), 'updated_at' => now()],
                   ['state_id' => 7, 'name' => 'Malambo', 'created_at' => now(), 'updated_at' => now()],
       
        ];
        city::insert($cities);
    }
}
