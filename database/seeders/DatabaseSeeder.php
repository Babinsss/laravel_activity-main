<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Male',
        ]);

        \App\Models\Gender::factory()->create([
            'gender' => 'Female',
        ]);

        // \App\Models\User::factory(100)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'Vince',
            'user_image' => '',
            'middle_name' => '',
            'last_name' => 'Barrientos',
            'suffix_name' => 'XXX',
            'birth_date' => '1975-03-02',
            'gender_id' => '1',
            'address' => 'fasdhjk',
            'contact_num' => '2308129018',
            'email_address' => 'test@email.com',
            'username' => 'NIVINCE',
            'password' => bcrypt('123'),
        ]);
    }
}
