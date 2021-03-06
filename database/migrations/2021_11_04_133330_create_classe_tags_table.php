<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classe_id')->constrained('classes','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('tag_id')->constrained('tags','id')->onDelete('cascade')->onUpdate('cascade');;
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
        Schema::dropIfExists('classe_tag');
    }
}
