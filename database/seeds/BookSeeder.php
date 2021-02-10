<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('books')->insert([
            'title_book'            => 'Indonesia',
            'class_id'                 => 1,
            'book_publisher'     => 'Buku Kita',
            'book_page_total'       => 300,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
    }
}
