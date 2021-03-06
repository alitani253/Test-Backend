<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailleCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detaille__commandes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('id_produit_boutique');
            $table->unsignedBigInteger('id_commande');
            $table->unsignedDouble('pu');
            $table->unsignedInteger('qnt');
            $table->timestamps();
            $table->foreign('id_commande')->references('id')->on('commandes');
            $table->foreign('id_produit_boutique')->references('id')->on('produit__boutiques');

        });

    }
    //

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detaille__commandes');
    }
}
