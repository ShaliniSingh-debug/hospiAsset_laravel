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
            $table->string('ORG_ID',100)->unique();
            $table->string('BRANCH_ID',100)->unique();
            $table->string('RAISED_BY',50);
            $table->string('DEVICE_ID',100)->unique();
            $table->string('CALL_TYPE',100)->nullable();
            $table->string('STATUS',100)->nullable();
            $table->dateTime('CREATED_DATE')->format('d.m.Y');
            $table->dateTime('UPDATED_DATE')->format('d.m.Y');
            $table->date('JOBCOMPLETED_DATE')->format('d.m.Y');
            $table->time('JOBCOMPLETED_TIME');
            $table->text('ACTION_TAKEN',1000)->nullable();
            $table->string('COMPLETED_BY',100);
            $table->string('PARTS_CHANGE',100);
            $table->integer('DOWN_TIME')->unsigned();
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
