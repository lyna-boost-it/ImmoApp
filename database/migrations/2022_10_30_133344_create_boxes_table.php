<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('edd_id')->unsigned();
            $table->index('edd_id');
            $table->foreign('edd_id')->references('id')->on('edds')->onDelete('cascade');
            $table->tinyInteger('type');
            $table->string('description');
            $table->integer('price_m2');
            $table->integer('area');
            $table->integer('amount');
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxes');
    }
}
