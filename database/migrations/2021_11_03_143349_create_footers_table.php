<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('p1');
            $table->string('icon1');
            $table->string('p2');
            $table->string('icon2');
            $table->string('p3');
            $table->string('icon3');
            $table->string('p4');
            $table->string('titre1');
            $table->string('icon4');
            $table->string('p5');
            $table->string('link1');
            $table->string('contenu1');
            $table->string('icon5');
            $table->string('p6');
            $table->string('link2');
            $table->string('contenu2');
            $table->string('titre2');
            $table->string('btn');
            $table->string('span1');
            $table->string('span2');
            $table->string('span3');
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
        Schema::dropIfExists('footers');
    }
}
