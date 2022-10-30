<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id')->unsigned();
            $table->index('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->bigInteger('bloc_id')->unsigned();
            $table->index('bloc_id');
            $table->foreign('bloc_id')->references('id')->on('blocs')->onDelete('cascade');
            $table->bigInteger('type_id')->unsigned();
            $table->index('type_id');
            $table->foreign('type_id')->references('id')->on('typologies')->onDelete('cascade');
            $table->string('floor');
            $table->string('orientation');
            $table->integer('consistance');
            $table->integer('n_lot_syst');
            $table->integer('n_lot_edd');
            $table->double('living_area');
            $table->double('garden_area');
            $table->double('terrace_area');
            $table->double('global_area');
            $table->double('avc');
            $table->string('path')->default(' ');// lots ans plans empty, if it exists its filled
            $table->date('progress_date');
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
        Schema::dropIfExists('edds');
    }
}
