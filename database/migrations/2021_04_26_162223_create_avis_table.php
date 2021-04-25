<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_livraison');
            $table->string('description');
            $table->string('note');
            $table->timestamps();
            $table->foreign('id_client')->references('id')->on('users');
            $table->foreign('id_livraison')->references('id')->on('livraisons');


        });
    }
    //protected $fillable = ['description', 'note','created_at', 'updated_at'];

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avis');
    }
}
