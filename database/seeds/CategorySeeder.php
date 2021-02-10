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
        	'category_id'       => 1,
            'book_category'     => 'Pelajaran Umum',       
        ]);

    	DB::table('categories')->insert([
    		'category_id'       => 2,
            'book_category'     => 'Pelajaran Produktif',       
        ]);

        DB::table('categories')->insert([
        	'category_id'       => 3,
            'book_category'     => 'Novel',       
        ]);

        DB::table('categories')->insert([
        	'category_id'       => 4,
            'book_category'     => 'Ensiklopedia',       
        ]);

        DB::table('categories')->insert([
        	'category_id'       => 5,
            'book_category'     => 'Dan Lain-lain',       
        ]);
    }
}
