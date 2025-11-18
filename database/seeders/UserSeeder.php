<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Rodrigo Solis',
            'email' => 'inquisidor.edo@gmail.com',
            'password'=> bcrypt('12345678'),
            'id_number' => '147',
            'phone'=> '55555555',
            'address'=> 'Calle 123, colonia 456'
        ])->assignRole('Doctor');
    }
}
