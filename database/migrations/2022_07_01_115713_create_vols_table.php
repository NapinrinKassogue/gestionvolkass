<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string("code_vol");
            $table->string("destination");
            $table->string("date_depar");
            $table->string("heure_depart");
            $table->integer("nombre_place_A");
            $table->integer("nombre_place_B");
            $table->integer("prix_classe_A");
            $table->integer("prix_classe_B");
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
        Schema::dropIfExists('vols');
    }
}
