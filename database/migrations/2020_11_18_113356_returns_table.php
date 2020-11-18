<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('returns', function (Blueprint $table) {
            $table->bigIncrements('return_id');
            $table->bigInteger('borrow_id_created_by')->unsigned();
            $table->foreign('borrow_id_created_by')->references('borrow_id')->on('borrows')->onDelete('cascade');
            $table->bigInteger('borrow_id_updated_by')->unsigned();
            $table->foreign('borrow_id_updated_by')->references('borrow_id')->on('borrows')->onDelete('cascade');
            $table->bigInteger('borrow_id_deleted_by')->unsigned();
            $table->foreign('borrow_id_deleted_by')->references('borrow_id')->on('borrows')->onDelete('cascade');
            
            $table->bigInteger('mulct');
            $table->string('return_status');
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
        Schema::dropIfExists('returns');
    }
}
