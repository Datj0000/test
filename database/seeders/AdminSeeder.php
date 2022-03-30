<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert some stuff
        DB::table('tbl_admin')->insert([
            'admin_username' => 'admin',
            'admin_email' => 'admin@gmail.com',
            'admin_name' => 'Admin',
            'admin_password' => md5('123456'),
            'admin_image' => '',
            'admin_token' => '',
        ]);

    }
}
