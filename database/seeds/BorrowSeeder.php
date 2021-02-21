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
            'book_id'            => 2,
            'usr_id'             => 3,
            'borrow_total_books' =>34,
            'borrow_date'        => '2020-01-12',
            'borrow_back_date'   => '2020-01-12',
            'borrow_fine'         => '',
        ]);
        DB::table('borrows')->insert([
            'book_id'            => 3,
            'usr_id'             => 2,
            'borrow_total_books' => 23,
            'borrow_date'        => '2020-01-12',
            'borrow_back_date'   => '2020-01-12',
            'borrow_fine'         => '',
        ]);
        DB::table('borrows')->insert([
            'book_id'            => 4,
            'usr_id'             => 5,
            'borrow_total_books' =>  45,
            'borrow_date'        => '2020-01-12',
            'borrow_back_date'   => '2020-01-12',
            'borrow_fine'         => '',
        ]);
        DB::table('borrows')->insert([
            'book_id'            => 5,
            'usr_id'             => 4,
            'borrow_total_books' =>  56,
            'borrow_date'        => '2020-01-12',
            'borrow_back_date'   => '2020-01-12',
            'borrow_fine'         => '',
        ]);
        DB::table('borrows')->insert([
            'book_id'            => 6,
            'usr_id'             => 2,
            'borrow_total_books' =>  59,
            'borrow_date'        => '2020-01-12',
            'borrow_back_date'   => '2020-01-12',
            'borrow_fine'         => '',
        ]);DB::table('borrows')->insert([
            'book_id'            => 8,
            'usr_id'             => 5,
            'borrow_total_books' => 34,
            'borrow_date'        => '2020-01-12',
            'borrow_back_date'   => '2020-01-12',
            'borrow_fine'         => '',
        ]);
    }
}
