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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_uno');
            $table->string('Nombre_dos')->nullable();
            $table->string('Apellido_uno');
            $table->string('Apellido_dos')->nullable();
            $table->string('Email')->unique();
            $table->timestamp('Email_verified_at')->nullable();
            $table->string('Password');
            $table->string('Telefono')->nullable();
            $table->string('Fecha_registro')->useCurrent();
            $table->rememberToken();
            
            $table->unsignedBigInteger('Id_rol');
            $table->foreign('Id_rol')
            ->references('id')
            ->on('roles')
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
        Schema::dropIfExists('users');
    }
};
