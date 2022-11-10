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
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('designation')->nullable();
            $table->string('code_departement')->nullable();
            $table->string('statut')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_supp')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('id_enregistrement')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_destruction')->nullable();
            $table->string('delegation_code')->nullable();
            $table->string('date_suppression')->nullable();
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
        Schema::dropIfExists('departements');
    }
};
