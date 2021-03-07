<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PayFines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('pay_fines', function (Blueprint $table) {
            $table->bigIncrements('pay_id');
            $table->foreignId('pay_borrow_id');
            $table->foreign('pay_borrow_id') -> references('bor_id')->on('borrows');
            $table->string('pay_fine');
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
        Schema::dropIfExists('pay_fines');
    }
}
