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
        Schema::create('passages', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('libelle')->nullable();
            $table->string('periode')->nullable();
            $table->string('type_periode')->nullable();
            $table->string('type_pied')->nullable();
            $table->string('active')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_suppression')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('date_enregistrement')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_destruction')->nullable();
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
        Schema::dropIfExists('passages');
    }
};
