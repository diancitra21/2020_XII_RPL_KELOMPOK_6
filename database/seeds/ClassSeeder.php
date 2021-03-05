<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'cls_id' 	=> '1',
            'cls_tingkatan' => '10',
        ]);

        DB::table('classes')->insert([
            'cls_id' 	=> '2',
            'cls_tingkatan' => '11',
        ]);

        DB::table('classes')->insert([
            'cls_id' 	=> '3',
            'cls_tingkatan' => '12',
        ]);
        DB::table('classes')->insert([
            'cls_id'  => '4',
            'cls_tingkatan' => '0',
        ]);
    }
}
