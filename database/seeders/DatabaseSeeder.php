<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create();

        DB::table('users')->insert([
            'name' => 'Rafi Wibawa Aruan',
            'email' => 'rafinew1997@gmail.com',
            'password' => Hash::make('1234qwer'),
            'key' => Crypt::encryptString('1234qwer'),
        ]);
    }
}
