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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->string('email')->nullable();
            $table->string('login')->nullable();
            $table->string('contact')->nullable();
            $table->string('photo')->nullable();
            $table->string('delegation_code_id')->nullable();
            $table->string('est_admin')->nullable();
            $table->string('est_agent')->nullable();
            $table->string('est_dg')->nullable();
            $table->string('est_dr')->nullable();
            $table->string('statut')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_sup')->nullable();
            $table->string('id_creation')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_suppression')->nullable();
            $table->string('user_id')->nullable();
            $table->string('piece_type')->nullable();
            $table->string('piece_numero')->nullable();
            $table->string('piece_recto')->nullable();
            $table->string('piece_verso')->nullable();
            $table->string('civilite')->nullable();
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
        Schema::dropIfExists('agents');
    }
};
