<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class ResidentProfileController extends Controller
{
    public function addresidentprofile(){
        return view('Resident.add');
    }
    public function saveresidentprofile(Request $request){
        $Residentsave= new Resident();
        $Residentsave->firstname = $request->firstname;
        $Residentsave->middlename = $request->middlename;
        $Residentsave->lastname= $request->lastname;
        $Residentsave->suffix = $request->suffix;
        $Residentsave->purok = $request->purok;
        $Residentsave->address = $request->address;


        if($Residentsave->save()) {
             return redirect()->back()->withErrors('Successfully Saved!');
        }
    }
}
