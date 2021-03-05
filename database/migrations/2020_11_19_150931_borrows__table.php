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
            $table->bigIncrements('bor_id');
            $table->foreignId('bor_book_id');
            $table->foreign('bor_book_id') -> references('bok_id')->on('books');
            $table->foreignId('bor_usr_id');
            $table->foreign('bor_usr_id') -> references('usr_id')->on('users');
            $table->biginteger('bor_total_books');
            $table->date('bor_date');
            $table->date('bor_back_date')->nullable();
            $table->Integer('bor_status')->default(0);
            $table->string('bor_fine')->nullable();
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
