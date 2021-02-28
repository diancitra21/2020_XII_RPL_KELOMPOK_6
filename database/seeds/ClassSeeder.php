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
            'class_id' 	=> '1',
            'tingkatan' => '10',
        ]);

        DB::table('classes')->insert([
            'class_id' 	=> '2',
            'tingkatan' => '11',
        ]);

        DB::table('classes')->insert([
            'class_id' 	=> '3',
            'tingkatan' => '12',
        ]);
        DB::table('classes')->insert([
            'class_id'  => '4',
            'tingkatan' => '0',
        ]);
    }
}
