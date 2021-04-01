<?php

use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('collections')->insert([
            'col_id' 	=> '1',
            'col_rack' => 'Rak 1',
        ]);
        DB::table('collections')->insert([
            'col_id' 	=> '2',
            'col_rack' => 'Rak 2',
        ]);

        DB::table('collections')->insert([
            'col_id' 	=> '3',
            'col_rack' => 'Rak 3',
        ]);
    }
}
