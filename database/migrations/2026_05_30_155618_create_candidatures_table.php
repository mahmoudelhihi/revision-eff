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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->float('score');
            // FOREGN ... REFRENCES ... ON ...
            $table->string('condidat_id');
            $table->string('filiere_id');

            $table->foreign('condidat_id')->references('cen')->on('condidats');
            $table->foreign('filiere_id')->references('codef')->on('filieres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
