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
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('dimensions');
            $table->double('thickness');
            $table->unsignedBigInteger('paper_type_id');
            $table->unsignedBigInteger('paper_category_id');
            $table->string('provider');
            $table->double('top_price');
            $table->double('top_coli');
            $table->double('top_coala');
            $table->timestamps();

            $table->foreign('paper_type_id')->references('id')->on('paper_types')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('paper_category_id')->references('id')->on('paper_categories')->onUpdate('cascade')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papers');
    }
};
