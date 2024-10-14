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
        Schema::create('equipo_ordens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipo_de_trabajo_id')->constrained('equipo_de_trabajos')->onDelete('cascade');
            $table->foreignId('orden_de__trabajo_id')->constrained('orden_de__trabajos')->onDelete('cascade');
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
        Schema::dropIfExists('equipo_ordens');
    }
};
