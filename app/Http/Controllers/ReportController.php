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
   $puroks = Resident::distinct('purok')->pluck('purok');

    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where('purok', $purok)->where('sex', 'Male')->count();
        $count_female = Resident::where('purok', $purok)->where('sex', 'Female')->count();
        $total_population = $count_male + $count_female;

        $data_array[] = [
            'purok_name' => $purok,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population,
        ];
    }

 return view('Report.Population.index', compact('data_array'));
}


 
   public function listresidentprofile()
{
    // Fetch residents without sorting
    $allResidents = Resident::select('firstname', 'middlename', 'lastname')->get();

    // Sort residents alphabetically by last name
    $sortedResidents = $allResidents->sortBy('lastname');

    return view('Report.Population.list', compact('sortedResidents'));
}
}

//     public function savecertificateofindigency()
//     {
//         $puroks = Purok::all();
//         $data_array = [];

//         foreach ($puroks as $purok) {
//             $count_male = Resident::where([['certificateofindigency', $purok->certificate_of_indigency], ['sex', 'Male']])->get();
//             $count_female = Resident::where([['certificateofindigency', $purok->certificate_of_indigency], ['sex', 'Female']])->get();
//             $household = Resident::where([['certificateofindigency', $purok->certificate_of_indigency]])->get();
//             $total_population = 0;
            
//             $data_array[] = [
//                 'certificateofindigency' => $purok->certificate_of_indigency,
//                 'total_male' => count($count_male),
//                 'total_female' => count($count_female),
//                 'total_population' => $total_population,
//             ];
//         }

//         $report = $data_array;

//         return view('Report.Certificate of Indigency.index', [
//             'reports' => $report,
//         ]);
//     }

// public function saveindigency()
// {
//     $puroks = Purok::all();
//     $data_array = [];

//     foreach ($puroks as $purok) {
//         $count_male = Resident::where([['indigency', $purok->indigency], ['sex', 'Male']])->get();
//         $count_female = Resident::where([['indigency', $purok->indigency], ['sex', 'Female']])->get();
//         $household = Resident::where([['indigency', $purok->indigency]])->get();
//         $total_population = 0;

        
        
       
//         $data_array[] = [
//             'indigency' => $purok->indigency,
//             'total_male' => count($count_male),
//             'total_female' => count($count_female),
//             'total_population' => $total_population,
//         ];
//     }

//     $report = $data_array;

//     return view('Report.Indigency.index', [
//         'reports' => $report,
//     ]);
// }

// public function report(){
//         $puroks=Purok::all();
//         return view('certificate_of_indigency.index',[
//                 'puroks'=>$puroks
//         ]);
//     }
//     public function savereport(Request $request){
//         $certificate_of_indigencysave= new certificate_of_indigency();
//         $certificate_of_indigencysave->fullname = $request->fullname;
//         $certificate_of_indigencysave->address = $request->address;
//         $certificate_of_indigencysave->courtesy_tittles= $request->courtesy_tittles;
//         $certificate_of_indigencysave->issued_on = $request->issued_on;

//      if($certificate_of_indigencysave->save()) {
//              return redirect()->back()->withErrors('Successfully Saved!');
//         }
//     }


// }


//     return view('Report.Population.index', [
//         'reports' => $report,
//     ]);
// }
// }
