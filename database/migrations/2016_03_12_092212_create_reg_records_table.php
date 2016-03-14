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
            ['teamName', 'highschool', 'p1Name', 'p1Phone', 'p2Name', 'p2Phone', 'p3Name', 'p3Phone', 'coachName', 'coachMail', 'coachPhone' ];
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
