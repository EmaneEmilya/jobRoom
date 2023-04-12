<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('society');
            $table->string('jobTitle');
            $table->string('country');
            $table->string('city');
            $table->date('startDate');
            $table->date('endDate');
            $table->unsignedBigInteger('candidat_id')->nullable();
            $table->foreign('candidat_id')->references('id')->on('candidats');
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
        Schema::dropIfExists('experiences');
    }
}
