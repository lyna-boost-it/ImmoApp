<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('prospect_id');
            $table->integer('reservation_id');

            $table->string('visitor_type');
            $table->string('provenance');
            $table->date('visit_date');
            $table->integer('commercial');
            $table->string('visit_type');
            $table->string('visit_reason');

            $table->string('visit_afectation');
            $table->string('visit_type');
            $table->date('visitor_date');
            $table->time('visit_hour');

            $table->integer('visit_code');

            $table->string('comment');
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
        Schema::dropIfExists('taches');
    }
}
