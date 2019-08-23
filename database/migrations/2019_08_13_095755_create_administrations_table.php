<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('county');
            $table->string('constituency');
            $table->string('location');
            $table->string('sub_location');
            $table->string('name_of_chief');
            $table->string('chief_phone_no');
            $table->string('name_of_subchief');
            $table->string('subchief_phone_no');
            $table->rememberToken();
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
        Schema::dropIfExists('administrations');
    }
}
