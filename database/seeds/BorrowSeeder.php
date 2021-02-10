<?php

use Illuminate\Database\Seeder;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('borrows')->insert([
            'book_id'            => 1,
            'username'             => 'loli',
            'borrow_total_books' =>2 ,
            'borrow_date'        => '2020-01-12',
            'borrow_back_date'   => '2020-01-12',
            'borrow_fine'         => '',
        ]);
    }
}
