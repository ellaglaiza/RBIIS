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
        $resident=Resident::orderby('created_at','desc')->paginate(10);
        
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
        $Updatesave->purok = $request->purok;
<<<<<<< HEAD
        $Updatesave->sex = $request->sex;
        $Updatesave->civil_status = $request->civil_status;
        $Updatesave->religion = $request->religion;
        $Updatesave->citizenship = $request->citizenship;
=======
        $Updatesave->address = $request->address;

>>>>>>> ab4feaefa3f90581b4dbbaa5195978670d87fa88

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
        $Deletesave->purok = $request->purok;
        $Deletesave->address = $request->address;
<<<<<<< HEAD
        $Deletesave->sex = $request->sex;
        $Deletesave->civil_status = $request->civil_status;
        $Deletesave->religion = $request->religion;
        $Deletesave->citizenship = $request->citizenship;

=======
>>>>>>> ab4feaefa3f90581b4dbbaa5195978670d87fa88


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
