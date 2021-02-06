<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHspTblCallTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hsp_tbl_call_types', function (Blueprint $table) {
           
            $table->bigIncrements('ID',50);
            $table->string('NAME',100)->nullable();
            $table->string('CODE',100)->nullable();
            
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hsp_tbl_call_types');
    }
}
