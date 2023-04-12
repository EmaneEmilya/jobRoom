<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->integer('candidat_id')  
                  ->unsigned()  
                  ->index();  
            $table->foreign('candidat_id')  
                  ->references('id')  
                  ->on('candidats')  
                  ->onDelete('cascade');  
  
            $table->integer('offer_id')  
                  ->unsigned()  
                  ->index();  
            $table->foreign('offer_id')  
                  ->references('id')  
                  ->on('offers')  
                  ->onDelete('cascade');  
  
            $table->primary(['candidat_id', 'offer_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
