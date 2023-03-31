<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('valores',function(Blueprint $table)
        {
            $table->increments('id');
            $table->float('PM25',8,8)->nullable();
            $table->float('Temperatura',8,8)->nullable();
            $table->float('Humedad',8,8)->nullable();
            $table->float('IntensidadSonido',8,8)->nullable();
            $table->float('ParticulasGas',8,8)->nullable();
            $table->integer('sistema_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('sistema_id')->references('id')->on('sistemas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sistemas',function (Blueprint $table)
        {
            $table->dropForeingn(['sistema_id']);
        });
        Schema::dropIfExists('valores');
    }
};
