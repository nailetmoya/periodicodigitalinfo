<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\UserFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'nailet moya',
            'email' => 'nailet.jose.moya@gmail.com',
            'password' => bcrypt('12345678')
    ])->assignRole('Admin');
    
    User::factory(17)->create();
    }
}
