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
        $Residentsave->specify = $request->specify;  
        $Residentsave->nooffamilymember = $request->nooffamilymember;  
        $Residentsave->occupation = $request->occupation;  
        $Residentsave->members_school = $request->members_school;
        $Residentsave->status_of_employment = $request->status_of_employment;  
        $Residentsave->family_id =$request->family_id; 
        $Residentsave->members_name = json_encode($request->members_name);
        $Residentsave->members_middlename = json_encode($request->members_middlename);
        $Residentsave->members_lastname = json_encode($request->members_lastname);
        $Residentsave->members_qualifier = json_encode($request->members_qualifier);
        $Residentsave->members_address = json_encode($request->members_address);
        $Residentsave->members_placeofbirth = json_encode($request->members_placeofbirth);  
        $Residentsave->members_sex = json_encode($request->members_sex);
        $Residentsave->members_religion = json_encode($request->members_religion);
        $Residentsave->members_occupation = json_encode($request->members_occupation);
        $Residentsave->members_dob = json_encode($request->members_dob);
        $Residentsave->members_relationship = json_encode($request->members_relationship);
        $Residentsave->members_remark = json_encode($request->members_remark);
        $Residentsave->members_age = json_encode($request->members_age);
        $Residentsave->members_civilstatus = json_encode($request->members_civilstatus);
        $Residentsave->members_relationship = json_encode($request->members_relationship);

        if($Residentsave->save()) {
             return redirect()->back()->withErrors('Successfully Saved!');
        }
    }


}
