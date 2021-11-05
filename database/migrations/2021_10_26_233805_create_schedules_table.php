<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->foreignId('jour1_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('jour2_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('jour3_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('jour4_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('jour5_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('jour6_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->foreignId('jour7_id')->constrained('jours','id')->onDelete('cascade')->onUpdate('cascade');;
            $table->string('h1');
            $table->string('h2');
            $table->string('h3');
            $table->string('h4');
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
        Schema::dropIfExists('schedules');
    }
}
