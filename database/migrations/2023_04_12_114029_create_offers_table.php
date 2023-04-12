<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id_offer();
            $table->string('title')->index();
            $table->text('description');
            $table->string('society');
            $table->string('city');
            $table->dateTime('date');
            $table->unsignedBigInteger('recruiter_id')->nullable();
            $table->foreign('recruiter_id')->references('id_recruiter')->on('recruiters');
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
        Schema::dropIfExists('offers');
    }
}
