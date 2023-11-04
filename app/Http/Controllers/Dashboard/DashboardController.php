<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resident;


class DashboardController extends Controller
{
	public function __construct() 
    {
        $this->middleware('auth');
    }
    public function index() 
{
    $totalPopulation = Resident::count(); 

    return view('Dashboard.index', compact('totalPopulation'));
}
}