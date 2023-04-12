<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses', function (Blueprint $table) {
            $table->id_license();
            $table->boolean('status');
            $table->integer('duration');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id_admin')->on('admins');
            $table->unsignedBigInteger('recuiter_id')->nullable();
            $table->foreign('recuiter_id')->references('id_recuiter')->on('recuiters');
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
        Schema::dropIfExists('licenses');
    }
}
