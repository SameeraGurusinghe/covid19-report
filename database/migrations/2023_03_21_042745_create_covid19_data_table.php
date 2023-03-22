<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovid19DataTable extends Migration
{
    public function up()
    {
        Schema::create('covid19_data', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->integer('new_cases');
            $table->integer('active_cases');
            $table->integer('total_cases');
            $table->integer('deaths');
            $table->integer('recovered');
            $table->integer('patient_in_hospitals');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('covid19_data');
    }
}