<?php

namespace Database\Seeders;

use App\Models\Content;
use App\Models\Berita;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        DB::table('users')->insert([
            'name' => "admin",
            'username' => "admin",
            'role' => "Admin",
            "created_at" => now(),
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => "operator1",
            'username' => "operator1",
            'role' => "Operator",
            "created_at" => now(),
            'password' => Hash::make('12345678'),
        ]);

        Berita::factory(15)->create();
    }
}
