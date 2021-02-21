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

         DB::table('books')->insert([
            'title_book'            => 'indonesia',
            'class_id'                 => 2,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 300,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);

         DB::table('books')->insert([
            'title_book'            => 'indonesia',
            'class_id'                 => 3,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 300,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);

         DB::table('books')->insert([
            'title_book'            => 'Basis Data',
            'class_id'                 => 1,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'Basis Data',
            'class_id'                 => 2,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'Basis Data',
            'class_id'                 => 3,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'PDKK',
            'class_id'                 => 1,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'PDKK',
            'class_id'                 => 2,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'PDKK',
            'class_id'                 => 3,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'Matematika',
            'class_id'                 => 1,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'Matematika',
            'class_id'                 => 2,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'title_book'            => 'Matematika',
            'class_id'                 => 3,
            'book_publisher'     => 'airlangga',
            'book_page_total'       => 355,
            'book_total'            => 70,
            'category_id'         => 1,
        ]);
    }
}
