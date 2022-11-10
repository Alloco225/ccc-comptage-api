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
        Schema::create('comptage_cacaos', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('fruit_a')->nullable();
            $table->string('fruit_b')->nullable();
            $table->string('fruit_c')->nullable();
            $table->string('fruit_d')->nullable();
            $table->string('pertes_a')->nullable();
            $table->string('pertes_b')->nullable();
            $table->string('aspect_a')->nullable();
            $table->string('aspect_b')->nullable();
            $table->string('aspect_c')->nullable();
            $table->string('aspect_d')->nullable();
            $table->string('fe')->nullable();
            $table->string('flo')->nullable();
            $table->string('pese_f')->nullable();
            $table->string('Production_oct_mars')->nullable();
            $table->string('Production_avril_sept')->nullable();
            $table->string('an_campagne')->nullable();
            $table->string('active')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_supp')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_suppression')->nullable();
            $table->string('auteur_id')->nullable();
            $table->string('passage_id')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('no')->nullable();
            $table->string('parcelle_code')->nullable();
            $table->string('pied_code')->nullable();
            $table->string('village_code')->nullable();
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
        Schema::dropIfExists('comptage_cacaos');
    }
};
