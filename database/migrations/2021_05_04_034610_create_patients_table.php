<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('polis_num');
            $table->string('polis_comp');
            $table->unsignedInteger('polis_type');
            $table->string('pasport_num');
            $table->string('pasport_serial');
            $table->string('pasport_who');
            $table->string('pasport_date');
            $table->string('snils');
            $table->string('gender');
            $table->string('pasport_num');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
