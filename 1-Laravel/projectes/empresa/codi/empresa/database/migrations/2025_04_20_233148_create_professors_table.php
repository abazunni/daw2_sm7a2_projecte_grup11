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
        Schema::create('professors', function (Blueprint $table) {
            $table->id('identificador');
            $table->string('nom');
            $table->string('correu');
            $table->string('adreca');
            $table->string('ciutat');
            $table->string('mobil');
            $table->string('telefon');
            $table->unsignedBigInteger('departament');
            $table->foreign('departament')->references('identificador')->on('departaments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
