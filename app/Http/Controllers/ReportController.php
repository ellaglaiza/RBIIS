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
        // $total_population = 0;

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
            // 'total_population' => $total_population,
            'total_household' => count($household),
        ];
    }

    $report = $data_array;

    return view('Report.Population.index', [
        'reports' => $report,
    ]);
}


     public function savecertificateofindigency()
{
    $puroks = Purok::all();
    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where([['certificateofindigency', $purok->certificate_of_indigency], ['sex', 'Male']])->get();
        $count_female = Resident::where([['certificateofindigency', $purok->certificate_of_indigency], ['sex', 'Female']])->get();
        $household = Resident::where([['certificateofindigency', $purok->certificate_of_indigency]])->get();
        $total_population = 0;
        
       
        $data_array[] = [
            'certificateofindigency' => $purok->certificate_of_indigency,
            'total_male' => count($count_male),
            'total_female' => count($count_female),
            'total_population' => $total_population,
        ];
    }

    $report = $data_array;

    return view('Report.Certificate of Indigency.index', [
        'reports' => $report,
    ]);
}




public function saveindigency()
{
    $puroks = Purok::all();
    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where([['indigency', $purok->indigency], ['sex', 'Male']])->get();
        $count_female = Resident::where([['indigency', $purok->indigency], ['sex', 'Female']])->get();
        $household = Resident::where([['indigency', $purok->indigency]])->get();
        $total_population = 0;

        
        
       
        $data_array[] = [
            'indigency' => $purok->indigency,
            'total_male' => count($count_male),
            'total_female' => count($count_female),
            'total_population' => $total_population,
        ];
    }

    $report = $data_array;

    return view('Report.Indigency.index', [
        'reports' => $report,
    ]);
}

public function report(){
        $puroks=Purok::all();
        return view('certificate_of_indigency.index',[
                'puroks'=>$puroks
        ]);
    }
    public function savereport(Request $request){
        $certificate_of_indigencysave= new certificate_of_indigency();
        $certificate_of_indigencysave->fullname = $request->fullname;
        $certificate_of_indigencysave->address = $request->address;
        $certificate_of_indigencysave->courtesy_tittles= $request->courtesy_tittles;
        $certificate_of_indigencysave->issued_on = $request->issued_on;

     if($certificate_of_indigencysave->save()) {
             return redirect()->back()->withErrors('Successfully Saved!');
        }
    }


}




    


 