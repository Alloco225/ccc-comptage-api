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
        Schema::create('delegations', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('designation')->nullable();
            $table->string('code_delegation')->nullable();
            $table->string('secret')->nullable();
            $table->string('statut')->nullable();
            $table->string('date_creation')->nullable();
            $table->string('date_modification')->nullable();
            $table->string('identifiant')->nullable();
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
        Schema::dropIfExists('delegations');
    }
};
