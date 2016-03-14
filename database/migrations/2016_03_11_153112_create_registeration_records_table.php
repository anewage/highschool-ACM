<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterationRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registeredTeams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teamName');
            $table->string('mem1Name');
            $table->string('mem2Name');
            $table->string('mem3Name');
            $table->string('coachName');
            $table->string('coachMail');
            $table->string('coachPhone');
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
        Schema::drop('registeredTeams');
    }
}
