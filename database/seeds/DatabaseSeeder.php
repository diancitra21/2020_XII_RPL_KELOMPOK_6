<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClassSeeder::class);
        $this->call(CategorySeeder::class);
           $this->call(CollectionSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(BorrowSeeder::class);
        $this->call(Pay_finesSeeder::class);
        $this->call(PositionsSeeder::class);
        $this->call(PurposesSeeder::class);
         $this->call(VisitorSeeder::class);

    }
}
