<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('entreprise')->unique();
            $table->string('poste');
            $table->string('pays');
            $table->string('ville');
            $table->string('status');
            $table->longText('description');
            $table->string('user_email')->index();
            $table->timestamps();
            $table->foreign('user_email')->references('email')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stages');
    }


}
