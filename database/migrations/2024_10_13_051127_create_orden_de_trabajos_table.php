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
        Schema::create('orden_de__trabajos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_de_orden', 10)->unique();
            $table->string('Estado');
            $table->date('Fecha_de_creacion');
            $table->foreignId('cliente_id')->nullable()->constrained('clientes')->onDelete('set null');
            $table->foreignId('equipo_de_trabajo_id')->nullable()->constrained('equipo_de_trabajos')->onDelete('set null');

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
        Schema::dropIfExists('orden_de__trabajos');
    }
};
