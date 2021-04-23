<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('visitors', function (Blueprint $table) {
            $table->bigIncrements('vst_id');
            $table->string('vst_name');
            $table->foreignId('vst_position_id');
            $table->foreign('vst_position_id') -> references('pst_id')->on('positions');
             $table->foreignId('vst_purpose_id');
            $table->foreign('vst_purpose_id') -> references('pps_id')->on('purposes');
            $table->date('vst_date');
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
        Schema::dropIfExists('visitors');
    }
}
