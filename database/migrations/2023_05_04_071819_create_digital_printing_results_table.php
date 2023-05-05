<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_printing_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paper_type_id');
            $table->string('dimensions');
            $table->double('paper_thickness');
            $table->integer('sides');
            $table->integer('quantity');
            $table->double('discount')->default(0);
            $table->double('total_cost');
            $table->timestamps();

            $table->foreign('paper_type_id')->references('id')->on('paper_types')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digital_printing_results');
    }
};
