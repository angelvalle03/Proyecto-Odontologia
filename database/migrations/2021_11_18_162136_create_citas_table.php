<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('descripcion')->nullable();
            $table->string('estado')->nullable();
            $table->string('generador')->nullable();
            $table->unsignedBigInteger('doctor')->nullable();

            $table->foreign('doctor')->references('id')->on('users')
                    ->onDelete('set null');

            $table->unsignedBigInteger('hora_atencion')->nullable();

            $table->foreign('hora_atencion')->references('id')->on('horarios')
                    ->onDelete('set null');
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
        Schema::dropIfExists('citas');
    }
}
