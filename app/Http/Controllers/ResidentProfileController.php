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
        $Residentsave->age = $request->age;
        $Residentsave->place_of_birth = $request->place_of_birth;
        $Residentsave->purok = $request->purok;
        $Residentsave->address = $request->address;
        $Residentsave->sex = $request->sex;
        $Residentsave->civil_status = $request->civil_status;
        $Residentsave->citizenship = $request->citizenship;
        $Residentsave->religion = $request->religion;
        $Residentsave->elementary = $request->elementary;
        $Residentsave->high_school = $request->high_school;
        $Residentsave->college= $request->college;
        $Residentsave->degree_received = $request->degree_received;
        $Residentsave->special_skills = $request->special_skills;
        $Residentsave->year_graduated = $request->year_graduated;

        if($Residentsave->save()) {
             return redirect()->back()->withErrors('Successfully Saved!');
        }
    }
}
