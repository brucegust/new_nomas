<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
		$table->bigIncrements('id');
		$table->integer('cert_year');
		$table->string('cert_num');
		$table->string('lname');
		$table->string('fname');
		$table->string('addr1');
		$table->string('addr2');
		$table->string('city');
		$table->string('region_state');
		$table->string('country');
		$table->string('postal');
		$table->string('discipline');
		$table->string('phone');
		$table->string('email');
		$table->integer('license');
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
        Schema::dropIfExists('professional');
    }
}
