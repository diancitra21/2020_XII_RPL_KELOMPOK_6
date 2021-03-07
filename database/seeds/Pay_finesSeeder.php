<?php

use Illuminate\Database\Seeder;

class Pay_finesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Pay_fines')->insert([
            'pay_borrow_id'            => 9,
            'pay_fine'             => '23000',
            
        ]);
         DB::table('Pay_fines')->insert([
            'pay_borrow_id'            => 8,
            'pay_fine'             => '23000',
            
        ]);
         DB::table('Pay_fines')->insert([
            'pay_borrow_id'            => 7,
            'pay_fine'             => '23000',
            
        ]);
         DB::table('Pay_fines')->insert([
            'pay_borrow_id'            => 5,
            'pay_fine'             => '23000',
            
        ]);
    }
}
