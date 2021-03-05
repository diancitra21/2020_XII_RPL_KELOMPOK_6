<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'cat_id'       => 1,
            'cat_book_category'     => 'Pelajaran Umum',       
        ]);

    	DB::table('categories')->insert([
    		'cat_id'       => 2,
            'cat_book_category'     => 'Pelajaran Produktif',       
        ]);

        DB::table('categories')->insert([
        	'cat_id'       => 3,
            'cat_book_category'     => 'Novel',       
        ]);

        DB::table('categories')->insert([
        	'cat_id'       => 4,
            'cat_book_category'     => 'Ensiklopedia',       
        ]);

        DB::table('categories')->insert([
        	'cat_id'       => 5,
            'cat_book_category'     => 'Dan Lain-lain',       
        ]);
    }
}
