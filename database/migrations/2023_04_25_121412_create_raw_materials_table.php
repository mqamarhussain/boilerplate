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
        Schema::create('raw_materials', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->unsignedBigInteger('raw_material_category_id');
            $table->string('provider');
            $table->string('um');
            $table->double('thickness');
            $table->double('length');
            $table->double('width');
            $table->double('mp');
            $table->double('price_per_cm2');
            $table->timestamps();

            $table->foreign('raw_material_category_id')->references('id')->on('raw_material_categories')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raw_materials');
    }
};
