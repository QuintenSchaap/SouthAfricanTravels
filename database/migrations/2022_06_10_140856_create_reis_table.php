<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reis', function (Blueprint $table) {
            $table->id('idreis');
            $table->foreignId('idland');
            $table->foreignId('idaccommodatie');
            $table->integer('prijs');
            $table->date('startdatum');
            $table->date('einddatum');
            $table->text('kortebeschrijving')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reis');
    }
};
