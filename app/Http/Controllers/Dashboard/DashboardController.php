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

  $total_male_pwd = Resident::where('remarks', 'PWD')->where('sex', 'Male')->count();
    $total_female_pwd = Resident::where('remarks', 'PWD')->where('sex', 'Female')->count();
    $total_population_pwd = $total_male_pwd + $total_female_pwd;

    $total_male_senior = Resident::where('age', '>=', 60)->where('sex', 'Male')->count();
    $total_female_senior = Resident::where('age', '>=', 60)->where('sex', 'Female')->count();
    $total_population_senior = $total_male_senior + $total_female_senior;

    $total_male_soloparent = Resident::where('remarks', 'Solo Parent')->where('sex', 'Male')->count();
    $total_female_soloparent = Resident::where('remarks', 'Solo Parent')->where('sex', 'Female')->count();
    $total_population_soloparent = $total_male_soloparent + $total_female_soloparent;

 	$total_male_ofw = Resident::where('remarks', 'Overseas Filipino Workers')->where('sex', 'Male')->count();
    $total_female_ofw = Resident::where('remarks', 'Overseas Filipino Workers')->where('sex', 'Female')->count();
    $total_population_ofw = $total_male_ofw + $total_female_ofw;


	    return view('Dashboard.index', compact('totalPopulation', 'sum', 'total_HouseholdNo','total_population_pwd', 'total_population_senior', 'total_population_soloparent', 'total_population_ofw'));
}
}