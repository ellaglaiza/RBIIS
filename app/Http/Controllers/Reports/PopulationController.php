<?php

namespace App\Http\Controllers\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopulationController extends Controller
{
      public function populationstore() 
    {
        return view('Report.Population.index');
    }
}
