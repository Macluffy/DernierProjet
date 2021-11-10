<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * 
     * 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('titre');
            $table->string('nom');
            $table->integer('quantiter');
            $table->foreignId('genre_id')->constrained('genres','id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('horraire_id')->constrained('horraires','id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('jour_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('date_id')->constrained('dates','id')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->string('abo');
            $table->boolean('order')->nullable();
            $table->string('filtre')->nullable();
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
        Schema::dropIfExists('classes');
    }
}
