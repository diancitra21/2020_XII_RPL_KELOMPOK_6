<?php

use Illuminate\Database\Seeder;

class PurposesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	DB::table('Purposes')->insert([
            'pps_purpose'            => 'Membaca Buku',
            
        ]);
        DB::table('Purposes')->insert([
            'pps_purpose'            => 'Meminjam Buku',
            
        ]);

        DB::table('Purposes')->insert([
            'pps_purpose'            => 'Mengembalikan Buku',
            
        ]);

    }
}
