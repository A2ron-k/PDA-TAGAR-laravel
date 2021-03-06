<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurrentCase;

class CasesController extends Controller
{
    // public static function getData(){
    //     return [
    //         ['case_id' => "ID100000", 'ic_number'=> "S1234567A", 'location' => "80 Bukit Panjang Road", 'postal_code' => "123456", 
    //         'unit_number' => '#13-24', 'chief_complain' => "motorcycle accident", 'tagging_reults' => "burn, trauma, poisioning",
    //         'prediction_diagnosis' => "sepsis, heart attack, anaphalxysis", 'prediction_diagnosis_percentage' => "0.92,0.84,0.73"],

    //         ['case_id' => "ID100001", 'ic_number'=> "S1234567A", 'location' => "70 Bukit Panjang Road", 'postal_code' => "123456", 
    //         'unit_number' => '#13-24', 'chief_complain' => "motorcycle accident", 'tagging_reults' => "burn, trauma, poisioning",
    //         'prediction_diagnosis' => "sepsis, heart attack, anaphalxysis", 'prediction_diagnosis_percentage' => "0.92,0.84,0.73"],

    //         ['case_id' => "ID100002", 'ic_number'=> "S1234567A", 'location' => "60 Bukit Panjang Road", 'postal_code' => "123456", 
    //         'unit_number' => '#13-24', 'chief_complain' => "motorcycle accident", 'tagging_reults' => "burn, trauma, poisioning",
    //         'prediction_diagnosis' => "sepsis, heart attack, anaphalxysis", 'prediction_diagnosis_percentage' => "0.92,0.84,0.73"]
    //     ];
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cases.index', 
                        ["cases" => CurrentCase::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($case)
    {

        return view ('cases.show',[
            'case' => CurrentCase::findorFail($case)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
