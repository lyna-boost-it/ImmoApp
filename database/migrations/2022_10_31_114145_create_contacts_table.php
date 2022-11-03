<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.


     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('first_name');
            $table->string('civility');
            $table->string('provenance_dg');
            $table->string('m');
            $table->string('miss_name');
            $table->string('employer');
            $table->string('salary_net');
            $table->integer('social_security_number');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('function');
            $table->string('address');
            $table->string('commune');
            $table->integer('phone_fax');
            $table->string('email');
            $table->string('web_site');
            $table->string('rib2');
            $table->string('ribcb');
            $table->string('commercial_initial');
            $table->string('commercial');
            $table->string('affectation_date');
            $table->string('pi_type');
            $table->integer('piece_number');
            $table->string('delivery');
            $table->string('from');
            $table->string('birth_certificat_number');

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
        Schema::dropIfExists('contacts');
    }
}
