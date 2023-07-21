<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
       public function savepopulation(){
        $report=Report::orderby('created_at','desc')->paginate(10);
        
        return view('Report.Population.index',[
                'report'=>$report
        ]);
    }
}
