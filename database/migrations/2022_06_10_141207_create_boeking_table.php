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
        Schema::create('boeking', function (Blueprint $table) {
            $table->id('idboeking');
            $table->foreignId('idreis');
            $table->foreignId('idaccommodatie');
            $table->foreignId('idland');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boeking');
    }
};
