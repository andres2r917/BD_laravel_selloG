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
            $table->string('Documento_identidad')->unique();
            $table->date('Fecha_nacimiento');
            $table->string('Direccion');
            $table->string('Tipo_vivienda');
            $table->string('Ocupacion');
            $table->decimal('Salario', 10, 2)->nullable();
            $table->string('Telefono')->nullable();
            $table->string('Tienes_hijos')->default(false);

            $table->unsignedBigInteger('Id_usuario')->unique();
            $table->foreign('Id_usuario')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
