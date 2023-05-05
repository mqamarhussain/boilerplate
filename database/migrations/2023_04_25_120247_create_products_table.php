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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('product_category_id');
            $table->unsignedBigInteger('product_service_type_id');
            $table->string('intern');
            $table->string('externalizat');
            $table->double('length');
            $table->double('width');
            $table->double('thickness');
            $table->string('unit');
            $table->double('aria')->nullable();
            $table->decimal('unit_price');
            $table->decimal('pret_cm2');
            $table->timestamps();

            $table->foreign('product_category_id')->references('id')->on('product_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('product_service_type_id')->references('id')->on('product_service_types')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
