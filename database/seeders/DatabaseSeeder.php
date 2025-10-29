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
        //llame a role seeder

        $this->call([
            RoleSeeder::class

        ]);
        User::factory()->create([
            'name' => 'Rodrigo Solis',
            'email' => 'inquisidor.edo@gmail.com',
            'password'=> bcrypt('12345678')
        ]);
    }
}
