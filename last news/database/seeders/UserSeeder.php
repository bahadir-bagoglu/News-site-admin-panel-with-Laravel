<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'avatar' => '/uploads/users/test-kullanici-2022-08-10-090018.jpg',
            'name' => 'Bahadir Bagoglu',
            'email' => 'bahadir@admin.com',
            'password' => Hash::make('password'),
            'rolId' => '1',
            'user_status' => 'on',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
