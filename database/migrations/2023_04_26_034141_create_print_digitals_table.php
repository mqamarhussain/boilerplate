<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('print_digitals', function (Blueprint $table) {
            $table->id();
            $table->string('dimensions');
            $table->string('unit');
            $table->unsignedBigInteger('paper_type_id');
            $table->float('weight');
            $table->string('print_type');
            $table->decimal('piece_price', 8, 2);
            $table->decimal('price_100', 8, 2);
            $table->decimal('price_250', 8, 2);
            $table->decimal('price_500', 8, 2);
            $table->decimal('price_1000', 8, 2);
            $table->decimal('price_1500', 8, 2);
            $table->decimal('price_2000', 8, 2);
            $table->decimal('price_2500', 8, 2);
            $table->timestamps();

            $table->foreign('paper_type_id')->references('id')->on('paper_types')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('print_digitals');
    }
};

