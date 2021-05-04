<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('uid'); // id врача + время (timestamp)
            $table->unsignedInteger('id_patient');
            $table->unsignedInteger('id_doctor');
            $table->string('visit_date');
            $table->integer('uid');
            $table->integer('status'); // явка/нет

            $table->foreign('id_patient')->references('id')->on('patients')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('id_doctor')->references('id')->on('doctors')->onUpdate('CASCADE');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visit_logs');
    }
}
