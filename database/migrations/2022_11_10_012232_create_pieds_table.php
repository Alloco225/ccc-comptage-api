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
        Schema::create('pieds', function (Blueprint $table) {
            $table->id();
            $table->string('code_pied')->nullable();
            $table->string('numero_pied')->nullable();
            $table->string('type_pied')->nullable();
            $table->string('couleur')->nullable();
            $table->string('special')->nullable();
            $table->string('etat_pied')->nullable();
            $table->string('active')->nullable();
            $table->string('id_enregistrement')->nullable();
            $table->string('id_suppression')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_suppression')->nullable();
            $table->string('uuid')->nullable();
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
        Schema::dropIfExists('pieds');
    }
};
