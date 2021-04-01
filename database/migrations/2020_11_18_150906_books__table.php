
.<?php

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
            $table->bigIncrements('bok_id');
            $table->string('bok_title_book');
            $table->foreignId('bok_class_id');
            $table->foreign('bok_class_id') -> references('cls_id')->on('classes');
            $table->string('bok_publisher');
            $table->bigInteger('bok_page_total');
            $table->bigInteger('bok_total');
            $table->bigInteger('bok_stok')->nullable();
            $table->foreignId('bok_category_id');
            $table->foreign('bok_category_id') -> references('cat_id')->on('categories');
            $table->foreignId('bok_collection_id');
            $table->foreign('bok_collection_id') -> references('col_id')->on('collections');
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
