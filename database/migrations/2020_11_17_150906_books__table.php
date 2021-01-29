<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('book_id');
            $table->string('title_book');
            $table->foreignId('class_id');
            $table->foreign('class_id') -> references('class_id')->on('classes');
            $table->string('book_publisher');
            $table->bigInteger('book_page_total');
            $table->string('book_total');
            $table->string('book_category');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
