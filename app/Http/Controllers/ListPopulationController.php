<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Resident;
use App\Models\Purok;
use Illuminate\Support\Facades\DB;



class ListPopulationController extends Controller
{
public function savepopulationbyage()
{
    // Define the age groups
    $ageGroups = [
        'Children 0-5 yrs. old' => ['min' => 0, 'max' => 5],
        'Children 6-12 yrs. old' => ['min' => 6, 'max' => 12],
        'Children 13-17 yrs. old' => ['min' => 13, 'max' => 17],
        'Adult 18-35 yrs. old' => ['min' => 18, 'max' => 35], 
        'Adult 36-50 yrs. old' => ['min' => 36, 'max' => 50],
        'Adult 51-65 yrs. old' => ['min' => 51, 'max' => 65],
        'Adult 66 yrs. old and above' => ['min' => 66, 'max' => 150],
    ];

    $data_array = [];

    foreach ($ageGroups as $ageGroup => $ageRange) {
        // Query to count males and females in the current age group
        $count_male = Resident::where([
            ['sex', 'Male'],
            ['age', '>=', $ageRange['min']],
            ['age', '<=', $ageRange['max']]
        ])->count();

        $count_female = Resident::where([
            ['sex', 'Female'],
            ['age', '>=', $ageRange['min']],
            ['age', '<=', $ageRange['max']]
        ])->count();

        // Calculate total population
        $total_population = $count_male + $count_female;

        $data_array[] = [
            'populationby_age' => $ageGroup,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population,
        ];
    }

    $report = $data_array;

    return view('Report.PopulationByAge.index', [
        'reports' => $report,
    ]);
}
  

public function savesenior()
{
    $puroks = Purok::all();
    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where([['purok', $purok->purok_name], ['sex', 'Male'], ['age', '>=', 60]])->count();
        $count_female = Resident::where([['purok', $purok->purok_name], ['sex', 'Female'], ['age', '>=', 60]])->count();
        $total_population = Resident::where([['purok', $purok->purok_name], ['age', '>=', 60]])->count();

        $data_array[] = [
            'purok_name' => $purok->purok_name,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population, 
        ];
    }

    $report = $data_array;

    return view('Report.SeniorCitizen.index', [
        'reports' => $report
    ]);
}

public function savePWD()
{
    $puroks = Resident::distinct('purok')->pluck('purok');

    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where('purok', $purok)->where('remarks', 'PWD')->where('sex', 'Male')->count();
        $count_female = Resident::where('purok', $purok)->where('remarks', 'PWD')->where('sex', 'Female')->count();
        $total_population = $count_male + $count_female;

        $data_array[] = [
            'purok_name' => $purok,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population,
        ];
    }

    return view('Report.PWD.index', compact('data_array'));
}


public function saveOFW()
{
    // Replace 'Resident' with your actual model name
    $puroks = Resident::distinct('purok')->pluck('purok');

    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where('purok', $purok)->where('remarks', 'Overseas Filipino Workers')->where('sex', 'Male')->count();
        $count_female = Resident::where('purok', $purok)->where('remarks', 'Overseas Filipino Workers')->where('sex', 'Female')->count();
        $total_population = $count_male + $count_female;

        $data_array[] = [
            'purok_name' => $purok,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population,
        ];
    }

    return view('Report.OFW.index', compact('data_array'));
}

public function saveSoloParent()
{
  
    $puroks = Resident::distinct('purok')->pluck('purok');

    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where('purok', $purok)->where('remarks', 'Solo Parent')->where('sex', 'Male')->count();
        $count_female = Resident::where('purok', $purok)->where('remarks', 'Solo Parent')->where('sex', 'Female')->count();
        $total_population = $count_male + $count_female;

        $data_array[] = [
            'purok_name' => $purok,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population,
        ];
    }


    return view('Report.SoloParent.index', compact('data_array'));
}

public function saveUnemployed()
{
  
    $puroks = Resident::distinct('purok')->pluck('purok');

    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where('purok', $purok)->where('status_of_employment', 'Unemployed')->where('sex', 'Male')->count();
        $count_female = Resident::where('purok', $purok)->where('status_of_employment', 'Unemployed')->where('sex', 'Female')->count();
        $total_population = $count_male + $count_female;

        $data_array[] = [
            'purok_name' => $purok,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population,
        ];
    }


    return view('Report.Unemployed.index', compact('data_array'));
}
//another
}