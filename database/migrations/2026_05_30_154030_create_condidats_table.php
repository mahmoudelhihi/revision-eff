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
        Schema::create('condidats', function (Blueprint $table) {
            // 1 2 3 
            // $table->id();
            // B1208766
            $table->string('cen')->primary();
            $table->string('nom');
            $table->string('prenom');
            // SH123(unique)
            $table->string('cin')->unique();
            // par defaut: DTS
            $table->string('diplome')->default('DTS');
            $table->float('s1');
            $table->float('s2');
            $table->float('s3');
            $table->float('s4');
            $table->float('moy_general');
            $table->date('date_naissance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condidats');
    }
};
