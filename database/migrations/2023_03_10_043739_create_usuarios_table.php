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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();

            $table -> string('nombreUsuario');
            $table -> string('email');
            $table -> string('password');/**Contraseña */


            $table -> string('rol'); /**Agrego el atributo de rol para la tabla usuarios */
            /**Considero que es complicado tener una tabla solo de usuarios 
             * puesto a que cada usuario debe tener un id correspondiente en 
             * sus propias tablas las cuales pueden funcionar mal en conjunto */
            /**Solo que no supe como borrar esta tabla :'( */
            /**Ya vi que para la tarea no es redundante esta tabla */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
