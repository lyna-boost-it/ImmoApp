<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('client_id');
            $table->integer('edd_id');

            $table->string('financement_type');
            $table->date('reservation_date');
            $table->date('start_date');
            $table->string('reservation_number');
            $table->string('reservation_state');
            $table->string('first_payment');

            $table->double('public_apt_price');
            $table->double('public_m2_price');
            $table->double('selling_price');
            $table->double('payment_box');
            $table->double('additional_price');
            $table->double('box_price');

            $table->double('apt_discount_rate');
            $table->double('apt_discount');
            $table->double('full_price');
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
        Schema::dropIfExists('reservations');
    }
}
