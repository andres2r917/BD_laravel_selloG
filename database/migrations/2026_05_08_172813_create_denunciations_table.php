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
        Schema::create('denunciations', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_denuncia');
            $table->text('Descripcion_hecho');
            $table->string('Ubicacion');
            $table->decimal('Latitud', 10, 7)->nullable();
            $table->decimal('Longitud', 10, 7)->nullable();
            $table->string('Evidencia_url')->nullable();
            $table->boolean('Anonima')->default(false);
            $table->string('Estado_denuncia')->default('pendiente');

            $table->unsignedBigInteger('Id_usuario')->nullable();
            $table->foreign('Id_usuario')
            ->references('id')
            ->on('users')
            ->onDelete('set null')
            ->onUpdate('set null');

            $table->dateTime('Fecha_denuncia')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denunciations');
    }
};
