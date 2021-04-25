<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('id_livreur');
            $table->unsignedBigInteger('id_commande');
            $table->string('frais_livraison');
            $table->string('date_livraison');
            $table->string('adress_livraison');
            $table->timestamps();
            $table->foreign('id_commande')->references('id')->on('commandes');
            $table->foreign('id_livreur')->references('id')->on('users');

        });
    }

    //    protected $fillable = ['frais_livraison','date_livraison','adress_livraison', 'created_at', 'updated_at'];
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
}
