<?php

use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
        DB::table('Positions')->insert([
            'pst_position' 	=> 'Guru',
        ]);

        DB::table('Positions')->insert([
            'pst_position' 	=> 'Siswa',
        ]);
    }
    
}
