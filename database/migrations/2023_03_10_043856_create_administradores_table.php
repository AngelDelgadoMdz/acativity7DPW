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
        Schema::create('administradores', function (Blueprint $table) { /**Creacion de la tabla de los administradores */
            $table->id();

            $table -> string('email');
            $table -> string('password');
            $table -> string('nombre');
            $table -> string('apellidoPaterno');
            $table -> string('apellidoMaterno');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradores');
    }
};
