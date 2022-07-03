<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_cases', function (Blueprint $table) {
            $table->string('id');
            $table->string('case_id');
            $table->string('ic_number');
            $table->string('age');
            $table->string('allergies');
            $table->string('location');
            $table->string('postal_code');
            $table->string('unit_number');
            $table->string('chief_complain');
            $table->string('tagging_result_1');
            $table->string('tagging_result_2');
            $table->string('tagging_result_3');
            $table->string('prediction_diagnosis_1');
            $table->string('prediction_diagnosis_percentage_1');
            $table->string('prediction_diagnosis_2');
            $table->string('prediction_diagnosis_percentage_2');
            $table->string('prediction_diagnosis_3');
            $table->string('prediction_diagnosis_percentage_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('current_cases');
    }
}
