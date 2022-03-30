<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        DB::table('tbl_admin')->insert(
            array(
                'admin_username' => 'admin',
                'admin_email' => 'admin@gmail.com',
                'admin_name' => 'Admin',
                'admin_password' => 'e10adc3949ba59abbe56e057f20f883e',
                'admin_image' => '',
                'admin_token' => 'NKe8szAtU57vzbwu',
            )
        );
    }
}
