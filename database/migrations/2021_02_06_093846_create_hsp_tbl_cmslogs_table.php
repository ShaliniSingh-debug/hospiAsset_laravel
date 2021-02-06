<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHspTblCmslogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hsp_tbl_cmslogs', function (Blueprint $table) {
            $table->bigIncrements('CMS_LOGID');
            $table->string('TO_ADVERSE',100)->unique();
            $table->string('CALLER_DEPT',100)->unique();
            $table->string('CALLER_NAME',50);
            $table->string('CALLER_MOBILE',100)->unique();
            $table->string('CEMP_ID',100)->unique();
            $table->string('NATURE_OF_COMP',100)->nullable();
            $table->string('EID',50)->unique();
            $table->string('TYPE',100);
            $table->string('RESPONDED_BY',100)->nullable();
            $table->date('RESPONDED_DATE',100)->format('d.m.Y');
            $table->time('RESPONDED_TIME');
            $table->string('ATTENDED_BY');
            $table->date('ATTENDED_DATE')->format('d.m.Y');
            $table->time('ATTENDED_TIME');
            $table->text('REMARKS',1000)->nullable();
            $table->string('REASON',100);
            $table->text('RESPONSE_TIME',1000)->nullable();
            $table->text('TIME_TO_REPAIR',1000)->nullable();
            $table->text('PENDING_REASON',1000)->nullable();
            $table->date('PENDING_DATE')->format('d.m.Y');
            $table->string('PENDING_BY',100)->nullable();
            $table->string('PENDING_TIME',100)->nullable();
            $table->text('PART_TYPE',1000)->nullable();
            $table->string('PART_NAME',100)->nullable();
            $table->string('PO_NUMBER',100)->nullable();
            $table->date('PO_DATE')->format('d.m.Y');
            $table->date('DELIVERY_DATE')->format('d.m.Y');
            $table->string('INCIDENT_TYPE',50);
            $table->string('APPROVAL',100);
            $table->string('APPROVAL_NAME',100)->nullable();
            $table->string('ASSIGNED_BY',100)->nullable();
            $table->string('ASSIGNED_TO',50);
            $table->dateTime('ASSIGNED_ON')->format('d.m.Y');
            $table->string('ASSIGNED_STATUS',50);
            $table->integer('COST')->unsigned();
            $table->integer('SPENT_COST')->unsigned();
            $table->integer('SAVINGS_COST')->unsigned();
            $table->string('SAVINGS_APPROVE',100);
            $table->text('RESPONSE_DELAY_REASON',1000)->nullable();
            $table->text('REPAIR_DELAY_REASON',1000)->nullable();
            $table->text('PREVIOUS_CALL_DETAILS',1000)->nullable();
            $table->text('PRIORITY',1000)->nullable();
            $table->string('STATUS',50);
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
        Schema::dropIfExists('hsp_tbl_cmslogs');
    }
}
