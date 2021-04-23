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
            'bor_book_id'            => 2,
            'bor_usr_id'             => 3,
            'bor_total_books' =>34,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 1,
            'bor_fine'         => '23000',
        ]);
        DB::table('borrows')->insert([
            'bor_book_id'            => 3,
            'bor_usr_id'             => 2,
            'bor_total_books' => 23,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 0,
            'bor_fine'         => '30000',
        ]);
        DB::table('borrows')->insert([
            'bor_book_id'            => 4,
            'bor_usr_id'             => 5,
            'bor_total_books' =>  45,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 1,
            'bor_fine'         => '23000',
        ]);
        DB::table('borrows')->insert([
            'bor_book_id'            => 5,
            'bor_usr_id'             => 4,
            'bor_total_books' =>  56,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-12',
            'bor_status'            => 0,
            'bor_fine'         => '',
        ]);
        DB::table('borrows')->insert([
            'bor_book_id'            => 6,
            'bor_usr_id'             => 2,
            'bor_total_books' =>  59,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 1,
            'bor_fine'         => '23000',
        ]);
        DB::table('borrows')->insert([
            'bor_book_id'            => 8,
            'bor_usr_id'             => 5,
            'bor_total_books' => 34,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 1,
            'bor_fine'         => '',
        ]);

        DB::table('borrows')->insert([
            'bor_book_id'            => 8,
            'bor_usr_id'             => 6,
            'bor_total_books' => 20,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 1,
            'bor_fine'         => '23000',
        ]);
        DB::table('borrows')->insert([
            'bor_book_id'            => 2,
            'bor_usr_id'             => 2,
            'bor_total_books' => 20,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 2,
            'bor_fine'         => '23000',
        ]);

        DB::table('borrows')->insert([
            'bor_book_id'            => 1,
            'bor_usr_id'             => 4,
            'bor_total_books' => 1,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2020-01-18',
            'bor_status'            => 1,
            'bor_fine'         => '23000',
        ]);

        DB::table('borrows')->insert([
            'bor_book_id'            => 8,
            'bor_usr_id'             => 5,
            'bor_total_books' => 34,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2022-01-12',
            'bor_status'            => 0,
            'bor_fine'         => '',
        ]);

        DB::table('borrows')->insert([
            'bor_book_id'            => 5,
            'bor_usr_id'             => 5,
            'bor_total_books' => 2,
            'bor_date'        => '2020-01-12',
            'bor_back_date'   => '2022-01-12',
            'bor_status'            => 0,
            'bor_fine'         => '',
        ]);

    }
}
