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
   
 	$total_population_ofw = Resident::where('remarks', 'Overseas Filipino Workers')->count();

 	$total_population_unemployed = Resident::where('status_of_employment', 'Unemployed')->count();
	
   
	    return view('Dashboard.index', compact('totalPopulation', 'sum', 'total_HouseholdNo','total_population_pwd', 'total_population_senior', 'total_population_soloparent', 'total_population_ofw', 'total_population_unemployed'));
}

}