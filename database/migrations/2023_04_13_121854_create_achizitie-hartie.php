<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preturi-hartie', function (Blueprint $table) {
            $table->id();
            $table->string('culoare');
            $table->string('dimensiune');
            $table->string('tip');
            $table->string('categorie');
            $table->string('furnizor');
            $table->float('pret_top');
            $table->float('coli-top');
            $table->float('pret_coala');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('preturi-hartie');
    }
};
