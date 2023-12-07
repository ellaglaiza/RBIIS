<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resident;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
	public function __construct() 
    {
        $this->middleware('auth');
    }
    public function index() 
{
    $totalPopulation = Resident::count(); 
    $total_population_deceased = Resident::where('outofschool', 'Deceased')->count();
    $total_population_transferred = Resident::where('outofschool', 'Transferred')->count();

    $total_population =  $totalPopulation - $total_population_deceased - $total_population_transferred;

	$total_nofamily = Resident::select('householdNO', DB::raw('MAX(family_id) as total_family'))
	    ->groupBy('householdNO')
	    ->get();

	$sum = 0;
	foreach ($total_nofamily as $resident) {
	    $sum += (int)$resident->total_family;
	}

	$total_HouseholdNo = Resident::distinct('HouseholdNO')->count(); // Assuming 'household_id' is the column representing households

    $total_population_pwd = Resident::where('remarks', 'PWD')->count();
   
    $total_population_senior = Resident::where('age', '>=', 60)->count();

    $total_population_soloparent = Resident::where('remarks', 'Solo Parent')->count();
   
 	$total_population_ofw = Resident::where('remarks', 'OFW')->count();

	$total_population_unemployed = Resident::where('status_of_employment', 'Unemployed')->count();
	

   
	    return view('Dashboard.index', compact('totalPopulation','sum','total_HouseholdNo','total_population_pwd','total_population_senior','total_population_soloparent', 'total_population_ofw','total_population_unemployed','total_population_deceased','total_population'));
}

  public function listDeceased() 
{
    $deceasedRecords = $this->getDeceasedRecords();

    return view('Dashboard.list_deceased', compact('deceasedRecords'));
}

private function getDeceasedRecords()
{
    return Resident::where('outofschool', 'Deceased')->get();
}

public function listsoloparent() 
{
    $soloparentRecords = $this->getsoloparentRecords();

    return view('Dashboard.list_soloparent', compact('soloparentRecords'));
}

private function getsoloparentRecords()
{
    return Resident::where('remarks', 'Solo Parent')->get();
}
public function listpwd() 
{
    $listRecords = $this->getpwdRecords();

    return view('Dashboard.list_pwd', compact('listRecords'));
}

private function getpwdRecords()
{
    return Resident::where('remarks', 'PWD')->get();
}
public function listOFW() 
{
    $OFWRecords = $this->getOFWRecords();

    return view('Dashboard.listof_OFW', compact('OFWRecords'));
}

private function getOFWRecords()
{
      return Resident::where('remarks', 'OFW')->get();

}
public function listseniorcitizen() 
{
    $seniorCitizenRecords = $this->getSeniorCitizenRecords();

    return view('Dashboard.list_seniorcitizens', compact('seniorCitizenRecords'));
}

private function getSeniorCitizenRecords()
{
    $seniorAge = 60; // Define the age threshold for senior citizens

    return Resident::where('age', '>=', $seniorAge)
                   ->get();
}


}