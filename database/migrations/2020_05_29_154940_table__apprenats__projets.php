<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableApprenatsProjets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Apprenants_Projets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('Projets_id');
            $table->unsignedBigInteger('Apprenants_id');
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
        Schema::dropIfExists('Apprenants_Projets');
    }
}
