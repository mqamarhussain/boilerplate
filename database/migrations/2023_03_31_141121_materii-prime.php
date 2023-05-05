<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materii_prime', function (Blueprint $table) {
            $table->id();
            $table->string('nume_produs');
            $table->string('categorie');
            $table->string('furnizor');
            $table->string('um');
            $table->float('grosime');
            $table->float('lungime');
            $table->float('latime');
            $table->float('mp');
            $table->float('pret');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('materii_prime');
    }
};
