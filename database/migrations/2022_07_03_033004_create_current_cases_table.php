<?php

use App\Models\CurrentCase;
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
            $table->id();
            $table->string('case_id');
            $table->string('ic_number');
            $table->string('name');
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
            $table->string('medical_history');
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        });

        $data =  array(
            [
                'id' => '1',
                'case_id' => 'ID100000',
                'ic_number' => 'T0012345A',
                'name' => 'Jack',
                'age' => '22',
                'allergies' => 'Panadol',
                'location' => '233 Guillemard Rd',
                'postal_code' => '399738',
                'unit_number' => '#13-24',
                'chief_complain' => 'Motorcycle Accident',

                'tagging_result_1' => 'Burn',
                'tagging_result_2' => 'Trauma',
                'tagging_result_3' => 'Poison',

                'prediction_diagnosis_1' => 'Sepsis',
                'prediction_diagnosis_percentage_1' => '0.92',
                'prediction_diagnosis_2' => 'Heart Attack',
                'prediction_diagnosis_percentage_2' => '0.84',
                'prediction_diagnosis_3' => 'Anaphalxyis',
                'prediction_diagnosis_percentage_3' => '0.73',

                'medical_history' => 'Jack had trauma in 2021. While there have been no relapses he is still in risk of trauma.',
                'date' => '2022-04-20',
                'time' => '09:00:00'

            ],

            // [
            //     'name' => 'Category2',
            // ],
            // [
            //     'name' => 'Category3',
            // ],

            
        );
        foreach ($data as $datum) {
            $category = new CurrentCase(); //The Category is the model for your migration
            $category->case_id = $datum['case_id'];
            $category->ic_number = $datum['ic_number'];
            $category->name = $datum['name'];
            $category->age = $datum['age'];
            $category->allergies = $datum['allergies'];
            $category->location = $datum['location'];
            $category->postal_code = $datum['postal_code'];
            $category->unit_number = $datum['unit_number'];
            $category->chief_complain = $datum['chief_complain'];
            $category->tagging_result_1 = $datum['tagging_result_1'];
            $category->tagging_result_2 = $datum['tagging_result_2'];
            $category->tagging_result_3 = $datum['tagging_result_3'];

            $category->prediction_diagnosis_1 = $datum['prediction_diagnosis_1'];
            $category->prediction_diagnosis_percentage_1 = $datum['prediction_diagnosis_percentage_1'];
            $category->prediction_diagnosis_2 = $datum['prediction_diagnosis_2'];
            $category->prediction_diagnosis_percentage_2 = $datum['prediction_diagnosis_percentage_2'];
            $category->prediction_diagnosis_3 = $datum['prediction_diagnosis_3'];
            $category->prediction_diagnosis_percentage_3 = $datum['prediction_diagnosis_percentage_3'];
            $category->medical_history = $datum['medical_history'];
            $category->date = $datum['date'];
            $category->time = $datum['time'];

            $category->save();
        }
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
