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
            $table->bigInteger('user_id_created_by')->unsigned();
            $table->foreign('user_id_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_id_updated_by')->unsigned();
            $table->foreign('user_id_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_id_deleted_by')->unsigned();
            $table->foreign('user_id_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->bigInteger('book_id_created_by')->unsigned();
            $table->foreign('book_id_created_by')->references('book_id')->on('books')->onDelete('cascade');
            $table->bigInteger('book_id_updated_by')->unsigned();
            $table->foreign('book_id_updated_by')->references('book_id')->on('books')->onDelete('cascade');
            $table->bigInteger('book_id_deleted_by')->unsigned();
            $table->foreign('book_id_deleted_by')->references('book_id')->on('books')->onDelete('cascade');
            $table->bigInteger('total_borrow');
            $table->bigInteger('stock');
            $table->string('borrow_status');
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
