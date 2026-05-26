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
        Schema::create('usercivils', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_uno');
            $table->string('Nombre_dos');
            $table->string('Apellido_uno');
            $table->string('Apellido_dos');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Edad');
            $table->string('Documento_identidad');
            $table->string('Ocupacion');
            $table->string('Tipo_vivienda');
            $table->string('Salario');


            $table->string('email');


            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usercivils');
    }
};
