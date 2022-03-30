<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert some stuff
        DB::table('tbl_setting')->insert(
            array(
                'wallet_address' => '0xdcE5d5c2B2E91abd59C1a88A1760571f721C4dd9',
                'wallet_balance' => 0,
            )
        );
    }
}
