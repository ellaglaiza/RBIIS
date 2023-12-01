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
   $puroks = Resident::distinct('purok')->pluck('purok');

$data_array = [];

foreach ($puroks as $purok) {
    $count_male = Resident::where('purok', $purok)
        ->where('age', '>=', 60) // Corrected: Separated '>=' and the value '60'
        ->where('sex', 'Male')
        ->count();

    $count_female = Resident::where('purok', $purok)
        ->where('age', '>=', 60) // Corrected: Separated '>=' and the value '60'
        ->where('sex', 'Female')
        ->count();

    $total_population = $count_male + $count_female;

    $data_array[] = [
        'purok_name' => $purok,
        'total_male' => $count_male,
        'total_female' => $count_female,
        'total_population' => $total_population,
    ];
}

return view('Report.SeniorCitizen.index', compact('data_array'));

}

public function listssavesenior()
{
    $seniorCitizens = Resident::where('age', '>=', 60)
        ->select('firstname', 'middlename', 'lastname')
        ->orderBy('lastname') 
        ->get();

    return view('Report.SeniorCitizen.lists', compact('seniorCitizens'));
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

public function listsavePWD()
{
    $PWD = Resident::where('remarks', 'PWD')
        ->select('firstname', 'middlename', 'lastname')
        ->orderBy('lastname') // Sort by lastname in ascending order
        ->get();

    return view('Report.PWD.list', compact('PWD'));
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

public function listsaveOFW()
{
    $OFW = Resident::where('remarks', 'Overseas Filipino Workers')
        ->select('firstname', 'middlename', 'lastname')
        ->orderBy('lastname') // Sort by lastname in ascending order
        ->get();

    return view('Report.OFW.list', compact('OFW'));
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

public function listsaveSoloParent()
{
    // Fetch solo parents from the resident table and sort them by lastname
    $soloParents = Resident::where('remarks', 'Solo Parent')
        ->select('firstname', 'middlename', 'lastname')
        ->orderBy('lastname') // Sort by lastname in ascending order
        ->get();

    // Return the view with the sorted solo parent data
    return view('Report.SoloParent.list', compact('soloParents'));
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

public function listsaveUnemployed()
{
    // Fetch all solo parents from the resident table
    $unemployed = Resident::where('status_of_employment', 'Unemployed')
        ->select('firstname', 'middlename', 'lastname')
        ->orderBy('lastname') // Sort by lastname in ascending order
        ->get();

    // Return the view with the solo parent data
    return view('Report.Unemployed.list', compact('unemployed'));
}

public function saveChildrensOutofSchool()
{
  
    $puroks = Resident::distinct('purok')->pluck('purok');

    $data_array = [];

    foreach ($puroks as $purok) {
        $count_male = Resident::where('purok', $purok)->where('remarks', 'Childrens Out of School 15-24 yrs. old')->where('sex', 'Male')->count();
        $count_female = Resident::where('purok', $purok)->where('remarks', 'Childrens Out of School 15-24 yrs. old')->where('sex', 'Female')->count();
        $total_population = $count_male + $count_female;


        $data_array[] = [
            'purok_name' => $purok,
            'total_male' => $count_male,
            'total_female' => $count_female,
            'total_population' => $total_population,
        ];
    }


    return view('Report.ChildrensOutofSchool.index', compact('data_array'));
}
public function listsaveChildrensOutofSchool()
{
    // Fetch all solo parents from the resident table
    $OutofSchool = Resident::where('remarks', 'Childrens Out of School 15-24 yrs. old')
        ->select('firstname', 'middlename', 'lastname')
        ->orderBy('lastname') // Sort by lastname in ascending order
        ->get();

    // Return the view with the solo parent data
    return view('Report.ChildrensOutofSchool.list', compact('OutofSchool'));
}

    
// public function saveHouseholdSurvey(){

  
//     $puroks = Resident::distinct('purok')->pluck('purok');

//     $data_array = [];

//     foreach ($puroks as $purok) {
//         $count_male = Resident::where('purok', $purok)->where('remarks', 'Childrens Out of School 15-24 yrs. old')->where('sex', 'Male')->count();
//         $count_female = Resident::where('purok', $purok)->where('remarks', 'Childrens Out of School 15-24 yrs. old')->where('sex', 'Female')->count();
//         $total_population = $count_male + $count_female;


//         $data_array[] = [
//             'purok_name' => $purok,
//             'total_male' => $count_male,
//             'total_female' => $count_female,
//             'total_population' => $total_population,
//         ];
//     }


//     return view('Report.HouseholdSurvey.index', compact('data_array'));
// }



public function saveMonitoringReport(){

    //0-5 yrs old
    $total_male = Resident::whereBetween('age', [0, 5])->where('sex', 'Male')->count();
    $total_female = Resident::whereBetween('age', [0, 5])->where('sex', 'Female')->count();
    $total_population= $total_male + $total_female;

    //6-12 yrs old
    $total_male_sixyrs = Resident::whereBetween('age', [6, 12])->where('sex', 'Male')->count();
    $total_female_sixyrs = Resident::whereBetween('age', [6, 12])->where('sex', 'Female')->count();
    $total_population_sixyrs = $total_male_sixyrs + $total_female_sixyrs;

    //13-17 yrs old
    $total_male_13yrs = Resident::whereBetween('age', [13, 17])->where('sex', 'Male')->count();
    $total_female_13yrs = Resident::whereBetween('age', [13, 17])->where('sex', 'Female')->count();
    $total_population_13yrs = $total_male_13yrs + $total_female_13yrs;

    //18-35 yrs old
    $total_male_18yrs = Resident::whereBetween('age', [18, 36])->where('sex', 'Male')->count();
    $total_female_18yrs = Resident::whereBetween('age', [18, 36])->where('sex', 'Female')->count();
    $total_population_18yrs = $total_male_18yrs + $total_female_18yrs;

    //36-50 yrs old
    $total_male_36yrs = Resident::whereBetween('age', [36, 50])->where('sex', 'Male')->count();
    $total_female_36yrs = Resident::whereBetween('age', [36, 50])->where('sex', 'Female')->count();
    $total_population_36yrs = $total_male_36yrs + $total_female_36yrs;

     //51-65 yrs old
    $total_male_51yrs = Resident::whereBetween('age', [51, 65])->where('sex', 'Male')->count();
    $total_female_51yrs = Resident::whereBetween('age', [51, 65])->where('sex', 'Female')->count();
    $total_population_51yrs = $total_male_51yrs + $total_female_51yrs;

    //66yrs and above yrs old
    $total_male_66yrs = Resident::whereBetween('age', [66, 150])->where('sex', 'Male')->count();
    $total_female_66yrs = Resident::whereBetween('age', [66, 150])->where('sex', 'Female')->count();
    $total_population_66yrs = $total_male_66yrs + $total_female_66yrs;

    //pwd
    $total_male_pwd = Resident::where('remarks', 'PWD')->where('sex', 'Male')->count();
    $total_female_pwd = Resident::where('remarks', 'PWD')->where('sex', 'Female')->count();
    $total_population_pwd = $total_male_pwd + $total_female_pwd;

    //osc
    $total_male_osc = Resident::where('remarks', 'Childrens Out of School 15-24 yrs. old')->where('sex', 'Male')->count();
    $total_female_osc = Resident::where('remarks', 'Childrens Out of School 15-25 yrs. old')->where('sex', 'Female')->count();
    $total_population_osc = $total_male_osc + $total_female_osc;

    //unemployed
    $total_male_unemployed = Resident::where('status_of_employment', ' Unemployed')->where('sex', 'Male')->count();
    $total_female_unemployed = Resident::where('status_of_employment', 'Unemployed')->where('sex', 'Female')->count();
    $total_population_unemployed = $total_male_unemployed + $total_female_unemployed;

    //solo parent
    $total_male_soloparent = Resident::where('remarks', 'Solo Parent')->where('sex', 'Male')->count();
    $total_female_soloparent = Resident::where('remarks', 'Solo Parent')->where('sex', 'Female')->count();
    $total_population_soloparent = $total_male_soloparent + $total_female_soloparent;
   
    //Indigenous People
    $total_male_indigenous = Resident::where('remarks', 'Belongs to Indigenous People')->where('sex', 'Male')->count();
    $total_female_indigenous = Resident::where('remarks', 'Belongs to Indigenous People')->where('sex', 'Female')->count();
    $total_population_indigenous = $total_male_indigenous + $total_female_indigenous;


    //OFW
    $total_male_ofw = Resident::where('remarks', 'Overseas Filipino Workers')->where('sex', 'Male')->count();
    $total_female_ofw = Resident::where('remarks', 'Overseas Filipino Workers')->where('sex', 'Female')->count();
    $total_population_ofw = $total_male_ofw + $total_female_ofw;

    //Civil Status

    //single
    $total_singleF = Resident::where('civil_status', 'Single')->where('sex', 'Male')->count();
    $total_singleM = Resident::where('civil_status', 'Single')->where('sex', 'Female')->count();
    $total_population_S = $total_singleF + $total_singleM;

    //married
    $total_marriedF = Resident::where('civil_status', 'Married')->where('sex', 'Male')->count();
    $total_marriedM = Resident::where('civil_status', 'Married')->where('sex', 'Female')->count();
     $total_population_M = $total_marriedF + $total_marriedM; 

    //separated
    $total_separatedF = Resident::where('civil_status', 'Separated')->where('sex', 'Male')->count();
    $total_separatedM = Resident::where('civil_status', 'Separated')->where('sex', 'Female')->count();
    $total_population_TS = $total_separatedF + $total_separatedM;

    //widow
    $total_widowM = Resident::where('civil_status', 'Widow')->where('sex', 'Male')->count();
    $total_widowF = Resident::where('civil_status', 'Widow')->where('sex', 'Female')->count();
    $total_population_W = $total_widowM + $total_widowF; 
    
    //citizenship

    //Filipino
    $total_male_filipino = Resident::where('citizenship', 'Filipino')->where('sex', 'Male')->count();
    $total_female_filipino = Resident::where('citizenship', 'Filipino')->where('sex', 'Female')->count();
    $total_population_filipino = $total_male_filipino + $total_female_filipino;

    //foreigner
     $total_male_foreigner = Resident::where('citizenship', 'Foreigner')->where('sex', 'Male')->count();
    $total_female_foreigner = Resident::where('citizenship', 'Foreigner')->where('sex', 'Female')->count();
    $total_population_foreigner = $total_male_foreigner + $total_female_foreigner; 

    $total_nofamily = Resident::select('householdNO', DB::raw('MAX(family_id) as total_family'))
        ->groupBy('householdNO')
        ->get();

    $sum = 0;
    foreach ($total_nofamily as $resident) {
        $sum += (int)$resident->total_family;
    }
    return view('Report.MonitoringReport.index', compact('total_male_pwd', 'total_female_pwd', 'total_population_pwd','total_male_sixyrs', 'total_female_sixyrs', 'total_population_sixyrs','total_male_13yrs', 'total_female_13yrs', 'total_population_13yrs','total_male_18yrs', 'total_female_18yrs', 'total_population_18yrs','total_male_36yrs', 'total_female_36yrs', 'total_population_36yrs','total_male_51yrs', 'total_female_51yrs', 'total_population_51yrs','total_male_66yrs', 'total_female_66yrs', 'total_population_66yrs','total_male_osc', 'total_female_osc','total_population_osc','total_male_unemployed', 'total_female_unemployed', 'total_population_unemployed', 'total_male_soloparent', 'total_female_soloparent', 'total_population_soloparent','total_male_ofw', 'total_female_ofw', 'total_population_ofw', 'total_male', 'total_female', 'total_population', 'total_population_S', 'total_singleF', 'total_singleM', 'total_marriedF','total_marriedM', 'total_separatedF', 'total_separatedM' ,'total_widowF', 'total_widowM', 'total_population_M', 'total_population_TS', 'total_population_W', 'total_population_filipino', 'total_male_filipino',  'total_female_filipino', 'total_female_foreigner','total_male_foreigner', 'total_population_foreigner','total_male_indigenous','total_female_indigenous' , 'total_population_indigenous', 'sum'));
    }



//another
}