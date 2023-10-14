<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Resident;
use App\Models\Purok;


class ReportController extends Controller
{
      public function savepopulation()
{
    $puroks = Purok::all();
    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where([['purok', $purok->purok_name], ['sex', 'Male']])->get();
        $count_female = Resident::where([['purok', $purok->purok_name], ['sex', 'Female']])->get();
        $household = Resident::where([['purok', $purok->purok_name]])->get();
        $total_population = 0;
        // foreach ($household as $resident) {
        //     if ($resident->members_name === 'null' || $resident->members_name === null) {
        //         $total_population += 1;
        //     } else {
        //         $members = json_decode($resident->members_name, true); 
        //         if (is_array($members)) {
        //             $total_population += 1 + count($members);
        //         } else {
        //             $total_population += 1; 
        //         }
        //     }
        // }

        $data_array[] = [
            'purok_name' => $purok->purok_name,
            'total_male' => count($count_male),
            'total_female' => count($count_female),
            'total_household' => count($household),
        ];
    }

    $report = $data_array;

    return view('Report.Population.index', [
        'reports' => $report,
    ]);
}
}