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
        Schema::create('bestemming', function (Blueprint $table) {
            $table->id('idbestemming');
            $table->foreignId('idland');
            $table->string('naam');
            $table->string('plaats');
            $table->string('prijs');
            $table->text('beschrijving')->nullable();
            $table->string('foto');
            $table->date('startdatum');
            $table->date('einddatum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bestemming');
    }
};
