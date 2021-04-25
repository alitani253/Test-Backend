<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitBoutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit__boutiques', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('id_produit');
            $table->unsignedBigInteger('id_boutique');
            $table->string('libelle');
            $table->string('code');
            $table->timestamps();
            $table->foreign('id_boutique')->references('id')->on('boutiques');
            $table->foreign('id_produit')->references('id')->on('produits');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit__boutiques');
    }
}
