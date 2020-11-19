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
        	[
        	'title_book'	=>	'bahasa indonesia',
        	'type_book'	=>	'pelajaran',
        	'publication_year'	=>	'2018',
        	'publisher'	=>	'kementerian pendidikan dan kebudayaan',
        	'page_thickness'	=>	'258',
        	'author' => 'Maman Suryaman, Suherli, dan Istiqomah' 
        	
        ],
        [
        	'title_book'	=>	'matematika',
        	'type_book'	=>	'pelajaran',
        	'publication_year'	=>	'2018',
        	'publisher'	=>	'kementerian pendidikan dan kebudayaan',
        	'page_thickness'	=>	'232',
        	'author' => 'Abdur Rahman Asari, Tjang Daniel Chandra, ipung yuwono, lathiful anwar, syaiful hamzah nasution, dahliatul hasanh, makbul muksar, vita kusuma sari, nur atikah' 
        	
        ]
        	]);
    }
}
