<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        DB::table('user')->insert([
        [
            'name' => 'Loi Pham',
            'email' => 'LP@example.com',
            'password'=>Hash::make('password111'),
            'role'=>'admin',
        ],
        [
            'name'=>'Nam Nguyen',
            'email'=>'NN@example.com',
            'password'=>Hash::make('password112'),
            'role'=>'staff',
        ],
         [
            'name'=>' Nu Thi',
            'email'=>'NT@example.com',
            'password'=>Hash::make('password112'),
            'role'=>'user',
        ],
        ]);
    }
}
