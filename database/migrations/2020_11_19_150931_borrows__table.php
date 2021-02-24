<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BorrowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->bigIncrements('borrow_id');
            $table->foreignId('book_id');
            $table->foreign('book_id') -> references('book_id')->on('books');
            $table->foreignId('usr_id');
            $table->foreign('usr_id') -> references('usr_id')->on('users');
            $table->biginteger('borrow_total_books');
            $table->date('borrow_date');
            $table->date('borrow_back_date')->nullable();
            $table->enum('status', ['pinjam','kembali']);
            $table->string('borrow_fine')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
         Schema::dropIfExists('borrows');

    }
}
