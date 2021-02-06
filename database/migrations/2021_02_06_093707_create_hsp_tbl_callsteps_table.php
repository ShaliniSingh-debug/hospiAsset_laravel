<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHspTblCallstepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hsp_tbl_callsteps', function (Blueprint $table) {
            $table->bigIncrements('STEP_ID',50);
            $table->string('NAME',100)->nullable();
            $table->string('CODE',100)->nullable();
            $table->integer('ORG_AID')->unsigned();
            $table->integer('CALL_TYPEID')->unsigned();
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
        Schema::dropIfExists('hsp_tbl_callsteps');
    }
}
