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
        Schema::create('foundations', function (Blueprint $table) {
            $table->id();
            $table->string('Logo');
            $table->string('Nombre_organizacion');
            $table->string('Nit');
            $table->string('Nombre_representante');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Email');
            $table->string('Contraseña');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foundations');
    }
};
