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
            $table->string('naambestemming');
            $table->string('prijs');
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
        Schema::dropIfExists('bestemming');
    }
};
