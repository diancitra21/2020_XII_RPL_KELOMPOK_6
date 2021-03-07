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
            'bok_title_book'            => 'Indonesia',
            'bok_class_id'                 => 1,
            'bok_publisher'     => 'Buku Kita',
            'bok_page_total'       => 300,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 1,
        ]);

         DB::table('books')->insert([
            'bok_title_book'            => 'Indonesia',
            'bok_class_id'                 => 2,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 300,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 1,
        ]);

         DB::table('books')->insert([
            'bok_title_book'            => 'Indonesia',
            'bok_class_id'                 => 3,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 300,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 1,
        ]);

         DB::table('books')->insert([
            'bok_title_book'            => 'Basis Data',
            'bok_class_id'                 => 1,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
    'bok_stok'           => 70,
            'bok_category_id'         => 2,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'Basis Data',
            'bok_class_id'                 => 2,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 2,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'Basis Data',
            'bok_class_id'                 => 3,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 2,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'PDKK',
            'bok_class_id'                 => 1,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 2,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'PDKK',
            'bok_class_id'                 => 2,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 2,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'PDKK',
            'bok_class_id'                 => 3,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 2,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'Matematika',
            'bok_class_id'                 => 1,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'Matematika',
            'bok_class_id'                 => 2,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 1,
        ]);
         DB::table('books')->insert([
            'bok_title_book'            => 'Matematika',
            'bok_class_id'                 => 3,
            'bok_publisher'     => 'airlangga',
            'bok_page_total'       => 355,
            'bok_total'            => 70,
            'bok_stok'           => 70,
            'bok_category_id'         => 1,
        ]);
    }
}
