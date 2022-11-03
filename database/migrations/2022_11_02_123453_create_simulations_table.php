<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('prospect_id');
            $table->integer('edd_id');
            $table->string('financement_type');
            $table->string('negociating_plus');
            $table->string('advancement_rate');
            $table->date('date');
            $table->double('total_payed_amount');
            $table->double('first_payed_amount');
            $table->double('percentage');
            $table->double('m2_price');
            $table->double('total_price');
            $table->double('total_sale');
            $table->double('percentage_total_sale');
            $table->double('box_price');
            $table->double('amount_to_pay');
            $table->double('sale_m2');
            $table->double('commercial_negociation');
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
        Schema::dropIfExists('simulations');
    }
}
