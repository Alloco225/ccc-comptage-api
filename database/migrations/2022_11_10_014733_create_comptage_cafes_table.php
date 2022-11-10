<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptage_cafes', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('passage_id')->nullable();
            $table->string('nombre_grappe')->nullable();
            $table->string('nombre_fruit')->nullable();
            $table->string('fe')->nullable();
            $table->string('pese_f')->nullable();
            $table->string('noue')->nullable();
            $table->string('observation')->nullable();
            $table->string('Production_avril_sept')->nullable();
            $table->string('active')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_sup')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_suppression')->nullable();
            $table->string('village_code')->nullable();
            $table->string('auteur_id')->nullable();
            $table->string('parcelle_code')->nullable();
            $table->string('pied_code')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('Production_oct_mars')->nullable();
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
        Schema::dropIfExists('comptage_cafes');
    }
};
