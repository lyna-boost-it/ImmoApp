<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->integer('reservation_id');
            $table->double('price_m2');
            $table->double('full_price');
            $table->double('area');
            $table->string('payment_type');
            $table->date('date');
            $table->string('payment_mode');
            $table->string('description');
            $table->string('doc_number');
            $table->double('payed_amount');
            $table->string('observation')->nullable();

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
        Schema::dropIfExists('payments');
    }
}
