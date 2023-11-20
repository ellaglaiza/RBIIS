<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purok;
use App\Models\Resident;

class ResidentProfileController extends Controller
{
    public function addresidentprofile(){
        $puroks=Purok::all();
        return view('Resident.add',[
                'puroks'=>$puroks
        ]);
    }
    public function saveresidentprofile(Request $request){
        $Residentsave= new Resident();
        $Residentsave->firstname = $request->firstname;
        $Residentsave->middlename = $request->middlename;
        $Residentsave->lastname= $request->lastname;
        $Residentsave->suffix = $request->suffix;
        $Residentsave->age = $request->age;;
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
        $Residentsave->date_of_birth = $request->date_of_birth;  
        $Residentsave->remarks = $request->remarks;  
        $Residentsave->barangay = $request->barangay;  
        $Residentsave->city_munipality = $request->city_munipality; 
        $Residentsave->province  = $request->province;
        $Residentsave->region = $request->region;
        $Residentsave->landlineNo = $request->landlineNo;  
        $Residentsave->contact_number = $request->contact_number; 
        $Residentsave->householdNO = $request->householdNO;  
        $Residentsave->email = $request->email;  
        $Residentsave->mother_name = $request->mother_name;  
        $Residentsave->father_name = $request->father_name;  
        $Residentsave->guardian = $request->guardian;  
        $Residentsave->senior_HS = $request->senior_HS;  
        $Residentsave->year_graduated1 = $request->year_graduated1;  
        $Residentsave->vocational = $request->vocational;  
        $Residentsave->year_graduated2 = $request->year_graduated2;  
        $Residentsave->degree_received = $request->degree_received;  
        $Residentsave->special_skills = $request->special_skills;  
        $Residentsave->year_graduated3 = $request->year_graduated3;  
        $Residentsave->year_graduated4 = $request->year_graduated4;  
        $Residentsave->year_graduated5 = $request->year_graduated5;  
        $Residentsave->occupation = $request->occupation;  
        $Residentsave->status_of_employment = $request->status_of_employment;  
        $Residentsave->category_of_employment = $request->category_of_employment;  
        $Residentsave->type_of_employment = $request->type_of_employment;  
        $Residentsave->family_id =$request->family_id; 
        $Residentsave->members_firstname = json_encode($request->members_firstname);
        $Residentsave->members_middlename = json_encode($request->members_middlename);
        $Residentsave->members_lastname = json_encode($request->members_lastname);
        $Residentsave->members_qualifier = json_encode($request->members_qualifier);
        $Residentsave->members_address = json_encode($request->members_address);
        $Residentsave->members_placeofbirth = json_encode($request->members_placeofbirth);  
        $Residentsave->members_sex = json_encode($request->members_sex);
        $Residentsave->members_school = json_encode($request->members_school);
        $Residentsave->members_religion = json_encode($request->members_religion);
        $Residentsave->members_occupation = json_encode($request->members_occupation);
        $Residentsave->members_dob = json_encode($request->members_dob);
        $Residentsave->members_relationship = json_encode($request->members_relationship);
        $Residentsave->members_remark = json_encode($request->members_remark);
        $Residentsave-> $members_school = json_encode($request-> $members_school);


        if($Residentsave->save()) {
             return redirect()->back()->withErrors('Successfully Saved!');
        }
    }


}
