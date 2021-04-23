<?php

use Illuminate\Database\Seeder;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visitors')->insert([
            'vst_name'            => 'Eka',
            'vst_position_id'             => 2,
            'vst_purpose_id'             => 1,
            'vst_date'             => '2021-04-15',
        ]);

    DB::table('visitors')->insert([
            'vst_name'            => 'Evi',
            'vst_position_id'             => 1,
            'vst_purpose_id'             => 2,
            'vst_date'             => '2021-04-15',
        ]);

    DB::table('visitors')->insert([
            'vst_name'            => 'Dian',
            'vst_position_id'             => 2,
            'vst_purpose_id'             => 3,
            'vst_date'             => '2021-04-15',
        ]);

    DB::table('visitors')->insert([
            'vst_name'            => 'Serli',
            'vst_position_id'             => 1,
            'vst_purpose_id'             => 1,
            'vst_date'             => '2021-04-15',
        ]);

    DB::table('visitors')->insert([
            'vst_name'            => 'Lutfina',
            'vst_position_id'             => 2,
            'vst_purpose_id'             => 3,
            'vst_date'             => '2021-04-15',
        ]);
    }

}
