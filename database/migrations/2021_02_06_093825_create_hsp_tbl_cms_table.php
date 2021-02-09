<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHspTblCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hsp_tbl_cms', function (Blueprint $table) {
            $table->increments('CMS_ID');
            $table->string('ORG_ID',100);
            $table->string('BRANCH_ID',100);
            $table->string('RAISED_BY',50);
            $table->string('DEVICE_ID',100);
            $table->string('CALL_TYPE',100);
            $table->string('STATUS',100);
            $table->dateTime('CREATED_DATE');
            $table->dateTime('UPDATED_DATE')->nullable();
            $table->date('JOBCOMPLETED_DATE')->nullable();
            $table->time('JOBCOMPLETED_TIME')->nullable();
            $table->text('ACTION_TAKEN',1000)->nullable();
            $table->string('COMPLETED_BY',100)->nullable();
            $table->string('PARTS_CHANGE',100)->nullable();
            $table->integer('DOWN_TIME')->unsigned()->nullable();
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
        Schema::dropIfExists('hsp_tbl_cms');
    }
}
