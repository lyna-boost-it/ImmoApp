<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->tinyInteger('type');
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration')->nullable();
            $table->integer('bloc_number');
            $table->integer('lot_number');
            $table->integer('charges');
            $table->integer('additional_charges');
            $table->integer('vice_preparations');
            $table->integer('guaranty');
            $table->date('delivery_date');
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
        Schema::dropIfExists('projects');
    }
}
