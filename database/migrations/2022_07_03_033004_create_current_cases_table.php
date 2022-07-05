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
            [
                'id' => '2',
                'case_id' => 'ID100001',
                'ic_number' => 'S9912345B',
                'name' => 'Mary',
                'age' => '23',
                'allergies' => 'Penicillin',
                'location' => '727 Jurong West Avenue 5',
                'postal_code' => '640727',
                'unit_number' => '#01-190',
                'chief_complain' => 'Chest Pain',

                'tagging_result_1' => 'Burn',
                'tagging_result_2' => 'Trauma',
                'tagging_result_3' => 'Pain',

                'prediction_diagnosis_1' => 'Diabetes',
                'prediction_diagnosis_percentage_1' => '0.94',
                'prediction_diagnosis_2' => 'Cancer',
                'prediction_diagnosis_percentage_2' => '0.80',
                'prediction_diagnosis_3' => 'Pancreatic Disorder',
                'prediction_diagnosis_percentage_3' => '0.7',

                'medical_history' => 'Mary has been diabetic since 2015. She has been watching her sugar intake and keeping her weight constant.',
                'date' => '2022-04-15',
                'time' => '10:00:00'

            ],
            [
                'id' => '3',
                'case_id' => 'ID100002',
                'ic_number' => 'S9812345C',
                'name' => 'Jane',
                'age' => '24',
                'allergies' => 'Sulfonamides',
                'location' => '136 Bedok North Avenue 3',
                'postal_code' => '460136',
                'unit_number' => '#01-164',
                'chief_complain' => 'Collapse',

                'tagging_result_1' => 'Breathless',
                'tagging_result_2' => 'Shock',
                'tagging_result_3' => 'Poison',

                'prediction_diagnosis_1' => 'Asthma',
                'prediction_diagnosis_percentage_1' => '0.90',
                'prediction_diagnosis_2' => 'Hypotension',
                'prediction_diagnosis_percentage_2' => '0.88',
                'prediction_diagnosis_3' => 'Pneumonia',
                'prediction_diagnosis_percentage_3' => '0.86',

                'medical_history' => 'Jane has been asthmatic since the age of 5. She has had astma attacks at the age of 11 and 15.',
                'date' => '2022-04-10',
                'time' => '11:00:00'

            ],
            [
                'id' => '4',
                'case_id' => 'ID100003',
                'ic_number' => 'S9012345D',
                'name' => 'Tommy',
                'age' => '32',
                'allergies' => 'Aspirin',
                'location' => 'Millenia Walk 9 Raffles Boulevard',
                'postal_code' => '039596',
                'unit_number' => '#01-58',
                'chief_complain' => 'Slip and fall',

                'tagging_result_1' => 'Blood Loss',
                'tagging_result_2' => 'Trauma',
                'tagging_result_3' => 'Shock',

                'prediction_diagnosis_1' => 'Head concussion',
                'prediction_diagnosis_percentage_1' => '0.90',
                'prediction_diagnosis_2' => 'Head fracture',
                'prediction_diagnosis_percentage_2' => '0.80',
                'prediction_diagnosis_3' => 'Intracranial hematoma',
                'prediction_diagnosis_percentage_3' => '0.75',

                'medical_history' => 'Injured from car crash in 2014 where 12 stitches were made on his head.',
                'date' => '2022-04-08',
                'time' => '11:00:00'

            ],
            [
                'id' => '5',
                'case_id' => 'ID100004',
                'ic_number' => 'S9312345E',
                'name' => 'Ryan',
                'age' => '29',
                'allergies' => 'Nil',
                'location' => '200 Middle Rd',
                'postal_code' => '188980',
                'unit_number' => '#09-03',
                'chief_complain' => 'Fall from height',

                'tagging_result_1' => 'Blood Loss',
                'tagging_result_2' => 'Trauma',
                'tagging_result_3' => 'Shock',

                'prediction_diagnosis_1' => 'Head concussion',
                'prediction_diagnosis_percentage_1' => 'Nil',
                'prediction_diagnosis_2' => 'Nil',
                'prediction_diagnosis_percentage_2' => 'Nil',
                'prediction_diagnosis_3' => 'Nil',
                'prediction_diagnosis_percentage_3' => 'Nil',

                'medical_history' => 'Ryan suffers from mild autism since young.',
                'date' => '2022-04-01',
                'time' => '12:00:00'

            ],
            [
                'id' => '6',
                'case_id' => 'ID100005',
                'ic_number' => 'S8012345E',
                'name' => 'Riston',
                'age' => '42',
                'allergies' => 'Nil',
                'location' => '3 Temasek Ave',
                'postal_code' => '039190',
                'unit_number' => '#10-03',
                'chief_complain' => 'Stab Wound',

                'tagging_result_1' => 'Blood Loss',
                'tagging_result_2' => 'Trauma',
                'tagging_result_3' => 'Shock',

                'prediction_diagnosis_1' => 'Nil',
                'prediction_diagnosis_percentage_1' => 'Nil',
                'prediction_diagnosis_2' => 'Nil',
                'prediction_diagnosis_percentage_2' => 'Nil',
                'prediction_diagnosis_3' => 'Nil',
                'prediction_diagnosis_percentage_3' => 'Nil',

                'medical_history' => 'Riston suffered from torn ligament in ankle in 2006.',
                'date' => '2022-03-27',
                'time' => '13:00:00'

            ]

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
