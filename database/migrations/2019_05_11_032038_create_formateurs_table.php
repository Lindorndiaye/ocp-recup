<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prenom');
            $table->string('nom');  
            $table->integer('age');	
            $table->string('email');   
            $table->string('specialite');
            $table->string('mobile');
            $table->string('region')->nullable($value = false);	
            $table->string('ville');
            $table->string('diplome');
            $table->string('diplomem');
            $table->string('file');
            $table->string('carte');
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
        Schema::dropIfExists('formateurs');
    }
}
