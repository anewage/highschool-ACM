<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegRecordsTable extends Migration
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
            $table->timestamps();
            $table->string('teamName');
            $table->string('highschool');
            $table->string('p1Name');
            $table->string('p1Phone');
            $table->string('p2Name');
            $table->string('p2Phone');
            $table->string('p3Name');
            $table->string('p3Phone');
            $table->string('coachName');
            $table->string('coachMail');
            $table->string('coachPhone');
            $table->string('payment_id');
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
