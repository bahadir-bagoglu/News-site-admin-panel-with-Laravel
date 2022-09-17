<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'setting_description' => 'Site Title',
                'setting_key' => 'title',
                'setting_value' => 'Son Dakika',
                'setting_type' => 'input',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'setting_description' => 'Site Favicon',
                'setting_key' => 'site_image',
                'setting_value' => '/uploads/settings/site-image-2022-08-10-140528.jpg',
                'setting_type' => 'img',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        ]);
    }
}
