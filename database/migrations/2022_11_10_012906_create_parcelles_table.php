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
        Schema::create('parcelles', function (Blueprint $table) {
            $table->id();
            $table->string('code_parcelle')->nullable();
            $table->string('uuid')->nullable();
            $table->string('nom_parcelle')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
            $table->string('etat_parcelle')->nullable();
            $table->string('variete')->nullable();
            $table->string('mode_aquisition')->nullable();
            $table->string('observation_variete')->nullable();
            $table->string('superficie')->nullable();
            $table->string('type_plantation')->nullable();
            $table->string('production_annuelle')->nullable();
            $table->string('axe')->nullable();
            $table->string('annnee_creation')->nullable();
            $table->string('parcelle_eliminer')->nullable();
            $table->string('active')->nullable();
            $table->string('supp')->nullable();
            $table->string('id_supp')->nullable();
            $table->string('id_modification')->nullable();
            $table->string('id_enregistrement')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('date_destruction')->nullable();
            $table->string('date_suppression')->nullable();
            $table->string('delegation_code_id')->nullable();
            $table->string('departement_code_id')->nullable();
            $table->string('code_prod')->nullable();
            $table->string('sous_prefecture_code_id')->nullable();
            $table->string('village_code_id')->nullable();

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
        Schema::dropIfExists('parcelles');
    }
};
