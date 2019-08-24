<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('poste');
            $table->string('entreprise');
            $table->string('local');
            $table->string('email');
            $table->string('secteur_activity');
            $table->string('type_contrat');
            $table->float('salaire');
            $table->text('describe_entreprise');
            $table->text('describe_poste');
            $table->text('profil_recherche');
            $table->string('poste_proposal')->nullable();
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
        Schema::dropIfExists('annonces');
    }
}
