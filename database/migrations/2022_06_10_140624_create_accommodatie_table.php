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
        Schema::create('accommodatie', function (Blueprint $table) {
            $table->id('idaccommodatie');
            $table->foreignId('idbestemming');
            $table->string('soort');
            $table->text('ligging')->nullable();
            $table->text('faciliteiten')->nullable();
            $table->text('beschrijving')->nullable();
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodatie');
    }
};
