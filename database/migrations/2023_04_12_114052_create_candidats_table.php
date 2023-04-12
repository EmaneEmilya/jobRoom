<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id_candidat();
            $table->string('fullName');
            $table->string('email');
            $table->string('password');
            $table->string('contact');
            $table->string('city');
            $table->text('region');
            $table->timestamps();
            $table->unsignedBigInteger('recruiter_id')->nullable();
            $table->foreign('recruiter_id')->references('id_recruiter')->on('recruiters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidats');
    }
}
