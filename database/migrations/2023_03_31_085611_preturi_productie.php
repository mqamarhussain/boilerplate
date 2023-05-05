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
        Schema::create('preturi_productie', function (Blueprint $table) {
            $table->id();
            $table->string('denumire');
            $table->string('categorie');
            $table->string('tip_serviciu');
            $table->string('intern');
            $table->string('externalizat');
            $table->float('lungime');
            $table->float('latime');
            $table->float('grosime');
            $table->float('unitate_masura');
            $table->float('aria');
            $table->float('pret_unitar');
            $table->float('pret_cm2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('preturi_productie');
    }
};
