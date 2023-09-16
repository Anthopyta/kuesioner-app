<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kuesioner;
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

        User::create([
            'name' => 'mamat',
            'username' => 'admin',
            'password' => bcrypt('12345')
        ]);

        Kuesioner::create([
            'question' => 'あなたは私のことはどうでうすか？',
            'opsi1' => 'sangat baik',
            'opsi2' => 'baik',
            'opsi3' => 'kurang',
            'opsi4' => 'buruk'
        ]);
    }
}
