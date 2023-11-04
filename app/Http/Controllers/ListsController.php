<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resident;

class ListsController extends Controller
{
	 public function editresidentprofile(Request $request){
        $resident=Resident::where('id',$request->id)->first();
        
        return view('Resident.update',[
                'resident'=>$resident
        ]);
    }

     public function listresidentprofile(){
        $resident=Resident::orderby('created_at','desc')->paginate(1000);
        
        return view('Resident.List',[
                'residents'=>$resident
        ]);
    }
     public function updateresidentprofile(Request $request){
        $Updatesave= Resident::where('id',$request->id)->first();
        $Updatesave->firstname = $request->firstname;
        $Updatesave->middlename = $request->middlename;
        $Updatesave->lastname= $request->lastname;
        $Updatesave->suffix = $request->suffix;
<<<<<<< HEAD
        $Updatesave->age = $request->age;
        $Updatesave->place_of_birth = $request->place_of_birth;
        $Updatesave->purok = $request->purok;
        $Updatesave->address = $request->address;
=======
        $Updatesave->purok = $request->purok;
<<<<<<< HEAD
=======
        $Updatesave->age = $request->age;
>>>>>>> 75d72e283339b3e7eef427576aa04b7116e590a9
>>>>>>> 7fbcd5b33e7e657161d421ec3cb433db2a2b7a1d
        $Updatesave->sex = $request->sex;
        $Updatesave->civil_status = $request->civil_status;
        $Updatesave->citizenship = $request->citizenship;
        $Updatesave->religion = $request->religion;
        $Updatesave->elementary = $request->elementary;
        $Updatesave->high_school = $request->high_school;
        $Updatesave->college= $request->college;
        $Updatesave->date_of_birth = $request->date_of_birth;  
        $Updatesave->remarks = $request->remarks;  
        $Updatesave->barangay = $request->barangay;  
        $Updatesave->city_munipality = $request->city_munipality; 
        $Updatesave->province  = $request->province;
        $Updatesave->region = $request->region;
        $Updatesave->landlineNo = $request->landlineNo;  
        $Updatesave->contact_number = $request->contact_number;  
        $Updatesave->email = $request->email;  
        $Updatesave->mother_name = $request->mother_name;  
        $Updatesave->father_name = $request->father_name;  
        $Updatesave->guardian = $request->guardian;  
        $Updatesave->senior_HS = $request->senior_HS;  
        $Updatesave->year_graduated1 = $request->year_graduated1;  
        $Updatesave->vocational = $request->vocational;  
        $Updatesave->year_graduated2 = $request->year_graduated2;  
        $Updatesave->year_graduated3 = $request->year_graduated3;  
        $Updatesave->year_graduated4 = $request->year_graduated4;  
        $Updatesave->special_skills = $request->special_skills;  
        $Updatesave->degree_received = $request->degree_received;  
        $Updatesave->year_graduated5 = $request->year_graduated5;  
        $Updatesave->occupation = $request->occupation; 
        $Updatesave->householdNO = $request->householdNO;   
        $Updatesave->status_of_employment = $request->status_of_employment;  
        $Updatesave->category_of_employment = $request->category_of_employment;  
        $Updatesave->type_of_employment = $request->type_of_employment;  
        $Updatesave->members_name = json_encode($request->members_name);
        $Updatesave->members_dob = json_encode($request->members_dob);
        $Updatesave->members_relationship = json_encode($request->members_relationship);



        if($Updatesave->save()) {
             return redirect()->back()->withErrors('Updated!');
        }
    }
      public function deleteresidentprofile(Request $request){
        $Deletesave= Resident::where('id',$request->id)->first();
        $Deletesave->firstname = $request->firstname;
        $Deletesave->middlename = $request->middlename;
        $Deletesave->lastname= $request->lastname;
        $Deletesave->suffix = $request->suffix;
        $Deletesave->age = $request->age;
        $Deletesave->place_of_birth = $request->place_of_birth;
        $Deletesave->purok = $request->purok;
        $Deletesave->address = $request->address;
        $Deletesave->sex = $request->sex;
        $Deletesave->civil_status = $request->civil_status;
        $Deletesave->citizenship = $request->citizenship;
        $Deletesave->religion = $request->religion;
        $Deletesave->elementary = $request->elementary;
        $Deletesave->high_school = $request->high_school;
        $Deletesave->college= $request->college;
        $Deletesave->date_of_birth = $request->date_of_birth;  
        $Deletesave->remarks = $request->remarks;  
        $Deletesave->barangay = $request->barangay;  
        $Deletesave->city_munipality = $request->city_munipality; 
        $Deletesave->province  = $request->province;
        $Deletesave->region = $request->region;
        $Deletesave->landlineNo = $request->landlineNo;  
        $Deletesave->contact_number = $request->contact_number;  
        $Deletesave->email = $request->email;
        $Deletesave->special_skills = $request->special_skills;  
        $Deletesave->degree_received = $request->degree_received;    
        $Deletesave->mother_name = $request->mother_name;  
        $Deletesave->father_name = $request->father_name;  
        $Deletesave->guardian = $request->guardian;  
        $Deletesave->senior_HS = $request->senior_HS;  
        $Deletesave->householdNO = $request->householdNO;  
        $Deletesave->year_graduated1 = $request->year_graduated1;  
        $Deletesave->vocational = $request->vocational;  
        $Deletesave->year_graduated2 = $request->year_graduated2;  
        $Deletesave->year_graduated3 = $request->year_graduated3;  
        $Deletesave->year_graduated4 = $request->year_graduated4;  
        $Deletesave->year_graduated5 = $request->year_graduated5;  
        $Deletesave->occupation = $request->occupation;  
        $Deletesave->status_of_employment = $request->status_of_employment;  
        $Deletesave->category_of_employment = $request->category_of_employment;  
        $Deletesave->type_of_employment = $request->type_of_employment;  
        $Deletesave->members_name = json_encode($request->members_name);
        $Deletesave->members_dob = json_encode($request->members_dob);
        $Deletesave->members_relationship = json_encode($request->members_relationship);


        if($Deletesave->delete()) {
             return redirect()->back()->withErrors('Deleted!');
        }

    }
    public function viewresidentprofile(Request $request){
        $resident=Resident::where('id',$request->id)->first();
        
        return view('Resident.view',[
                'resident'=>$resident
        ]);
    }

}
