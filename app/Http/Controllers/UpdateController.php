<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class UpdateController extends Controller
{
       public function updateresidentprofile(){
        return view('Resident.update');
    }
    
  public function editsaveresidentprofile(Request $request){
        $Updatesave= new Update();
        $Updatesave->firstname = $request->firstname;
        $Updatesave->middlename = $request->middlename;
        $Updatesave->lastname= $request->lastname;
        $Updatesave->suffix = $request->suffix;
        $Updatesave->purok = $request->purok;
        $Updatesave->address = $request->address;


        if($Updatesave->save()) {
             return redirect()->back()->withErrors('Updated!');
        }
    }
}