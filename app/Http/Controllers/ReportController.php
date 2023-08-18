<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;


class ReportController extends Controller
{
       public function savepopulation(){
        
        return view('Report.Population.index');
    }
}

