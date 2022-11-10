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
        Schema::create('sous_prefectures', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('code_sous_prefecture')->nullable();
            $table->string('statut')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_supp')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('id_enregistrement')->nullable();
            $table->string('date_creation')->nullable();
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
        Schema::dropIfExists('sous_prefectures');
    }
};
