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
        Schema::create('producteurs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('code_producteur')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('photo')->nullable();
            $table->string('date_de_naissance')->nullable();
            $table->string('lieu_de_naissance')->nullable();
            $table->string('genre')->nullable();
            $table->string('numero_piece')->nullable();
            $table->string('contact')->nullable();
            $table->string('cel')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse_postale')->nullable();
            $table->string('taille')->nullable();
            $table->string('pointure')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('active')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_supp')->nullable();
            $table->string('id_creation')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_suppression')->nullable();
            $table->string('piece_recto')->nullable();
            $table->string('piece_type')->nullable();
            $table->string('piece_verso')->nullable();
            $table->string('piece_numero')->nullable();
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
        Schema::dropIfExists('producteurs');
    }
};
