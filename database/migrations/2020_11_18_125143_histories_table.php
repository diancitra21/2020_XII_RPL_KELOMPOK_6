<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('history_id');
            $table->bigInteger('borrow_id_created_by')->unsigned();
            $table->foreign('borrow_id_created_by')->references('borrow_id')->on('borrows')->onDelete('cascade');
            $table->bigInteger('borrow_id_updated_by')->unsigned();
            $table->foreign('borrow_id_updated_by')->references('borrow_id')->on('borrows')->onDelete('cascade');
            $table->bigInteger('borrow_id_deleted_by')->unsigned();
            $table->foreign('borrow_id_deleted_by')->references('borrow_id')->on('borrows')->onDelete('cascade');
            $table->bigInteger('return_id_created_by')->unsigned();
            $table->foreign('return_id_created_by')->references('return_id')->on('returns')->onDelete('cascade');
            $table->bigInteger('return_id_updated_by')->unsigned();
            $table->foreign('return_id_updated_by')->references('return_id')->on('returns')->onDelete('cascade');
            $table->bigInteger('return_id_deleted_by')->unsigned();
            $table->foreign('return_id_deleted_by')->references('return_id')->on('returns')->onDelete('cascade');
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
        Schema::dropIfExists('histories');
    }
}
