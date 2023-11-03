<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Resident;
use App\Models\Purok;


class ListPopulationController extends Controller
{
      public function savesenior()
{
    $puroks = Purok::all();
    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where([['purok', $purok->populationby_age], ['sex', 'Male']])->get();
        $count_female = Resident::where([['purok', $purok->populationby_age], ['sex', 'Female']])->get();
        $household = Resident::where([['purok', $purok->populationby_age]])->get();
        $total_population = 0;
        
       
        $data_array[] = [
            'populationby_age' => $purok->populationby_age,
            'total_male' => count($count_male),
            'total_female' => count($count_female),
            'total_population' => $total_population,
        ];
    }

    $report = $data_array;

    return view('Report.SeniorCitizen.index', [
        'reports' => $report,
    ]);
}

   public function savepopulationbyage()
{
    $puroks = Purok::all();
    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where([['purok', $purok->populationby_age], ['sex', 'Male']])->get();
        $count_female = Resident::where([['purok', $purok->populationby_age], ['sex', 'Female']])->get();
        $household = Resident::where([['purok', $purok->populationby_age]])->get();
        $total_population = 0;
        
       
        $data_array[] = [
            'populationby_age' => $purok->populationby_age,
            'total_male' => count($count_male),
            'total_female' => count($count_female),
            'total_population' => $total_population,
        ];
    }

    $report = $data_array;

    return view('Report.PopulationByAge.index', [
        'reports' => $report,
    ]);
}


}