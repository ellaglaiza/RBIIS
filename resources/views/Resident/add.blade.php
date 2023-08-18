@extends('layouts.default')

@section('content')
<style type="text/css">
    .form-control{
      color: black;
      margin-top: -8px;
      margin-bottom: -10px;
    }
</style>
<div class="content-header" style="font-weight: 700;">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
<!--          <h1 class="m-0" style="border-radius: 100px;">Add New Resident</h1>
 -->         </div>
            <div class="col-sm-6">
            </div>
         </div>
      </div>
      <div class="row card p-5" style="background-color: white;">
        @include('layouts.partials.messages')
         <form action="{{ route('residentprofile.save') }}"  method="post">
            @csrf
            <h3 class="m-1" style="font-weight: 600;">Personal Information</h3>

            <div class="card-2">
              <label>A. Region:</label>
              <input style=" margin-inline: 80px;" type="text" name="region"><br><br>
              <label>B. Province:</label>
              <input style="margin-inline: 71px;" type="text" name="province"><br><br>
              <label>C. City/Municipality:</label>
              <input style="margin-inline: 13px;" type="text" name="city/municipality"><br><br>
              <label>D. Barangay:</label>
              <input style="    margin-inline: 63px;" type="text" name="barangay"><br><br>
              <label>E. Household No.:</label>
              <input style="margin-inline: 27px;" type="text" name="household_no."><br><br>
            </div>
            <hr>
            <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>First Name </label>
                                 <input type="text" name="firstname"  class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Middle Name</label>
                                 <input type="text" name="middlename"  class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Last Name </label>
                                 <input type="text" name="lastname" class="form-control" >
                              </div>
                           </div>

                           <div class="col-md-1">
                              <div class="form-group">
                                <label> Suffix </label>
                                <input class= "form-control" name="suffix"  ></input>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group">
                                <label>Age</label>
                                <input class= "form-control" name="age" placeholder=""></input>
                              </div>
                           </div>
                              <div class="col-md-3">
                              <div class="form-group">
                                <label>Citizenship</label>
                                <input class= "form-control" name="citizenship" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Religion</label>
                                <input class= "form-control" name="religion" placeholder=""></input>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group">
                                <label>Place_of_Birth</label>
                                <input class= "form-control" name="place_of_birth" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label>Address</label>
                                <input class= "form-control" name="address" placeholder=""></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Purok </label>
                                <input class="form-control" name="purok"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Barangay</label>
                                <input class= "form-control" name="barangay"placeholder="" ></input>
                              </div>
                               </div>
                                <div class="col-md-3">
                              <div class="form-group">
                                <label>Street Name</label>
                                <input class= "form-control" name="streetname"placeholder="" ></input>
                              </div>
                               </div>
                                
                              <label style="margin-inline: 15px;">Sex:</label>
                                <div>
                                 <div>
                                <input style="display: 0px; margin-inline: 9px; margin-top: 25px;" type="checkbox" name="sex">
                                <label style="margin-top: 1px; margin-inline: -8px; display: inline-block;" name="male"> Male</label><br>
                                <input style="margin-inline: 9px; display: 0px;" type="checkbox" name="female">
                                <label style="margin-top: 1px; margin-inline: -8px;"> Female</label><br>
                              </div>
                               </div>

                                <label style="margin-inline: 50px;">Civil Status:</label>
                              <div class="">
                                 <div class="">
                                <input style="margin: -30px; margin-top: -29px;" type="checkbox" name="civil_status">
                                <label style="margin-top: 26px; margin-inline: 30px;" name="single"> Single</label>
                                <input style="margin: -23px; margin-top: -33px;" type="checkbox">
                                <label style="margin-top: 26px; margin-inline: 23px;" name="married"> Married</label><br>
                                <input style="margin: -31px; margin-top: -32px;" type="checkbox">
                                <label style="margin-top: 26px; margin-inline: 31px;" name="widow"> Widow</label>
                                <input style="margin: -29px; margin-top: -33px;" type="checkbox">
                                <label style="margin-top: 26px; margin-inline: 30px;" name="separated"> Separated</label>
                                </div>
                              </div>

                              <div class="col-md-7">
                                <div class="form-group">
                                  <hr>
                                  <h3 style="font-weight: 600;">Educational Background</h3>
                                  <label>Elementary </label>
                                  <input class="form-control" name="elementary"  placeholder=""></input>
                                </div>
                              </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label style="margin-top: 55px;">Year Graduated:</label>
                                <input style="margin-top: 10px;" class="form-control" name="year_graduated"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-7">
                              <div class="form-group">
                                <label>High School </label>
                                <input class="form-control" name="high_school"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Year Graduated:</label>
                                <input class="form-control" name="year_graduated"  placeholder=""></input>
                              </div>
                           </div>

                            <div class="col-md-7">
                              <div class="form-group">
                                <label>College </label>
                                <input class="form-control" name="college"  placeholder=""></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Year Graduated:</label>
                                <input class="form-control" name="year_graduated"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-11">
                              <div class="form-group">
                                <label>Degree Received</label>
                                <input class="form-control" name="degree_received"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-11">
                              <div class="form-group">
                                <label>Special Skills</label>
                                <input class="form-control" name="special_skills"  placeholder=""></input>
                              </div>
                           </div>
                             <h3 class="m-2" style="font-size: 1.75rem; font-weight: 600;">Occupation:</h3>
                               <div class="col-md-5">
                                 <div class="form-group">
                                <label></label>
                                <input class="form-control" name="Occupation"  placeholder="Occupation" style="margin-left: -163px; margin-top: 25px;"></input>
                              </div>
                           </div>
                         </div>
                         <div class="card-2">
                            <p style="margin-top: 27px">Source of Living:</p>
                            <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="employment">
                                <label style="margin-top: 28px" for="government"> Employment</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox">
                                <label style="margin-top: 28px" for="government"> Government</label>
                                <input style="margin: revert; margin-top: 14px"type="checkbox" id="occupation" name="government" >
                                <label style="margin-top: 28px" for="government"> Private</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="private" >
                                <label style="margin-top: 28px" for="government"> Remitance</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="remitance" >
                                <label style="margin-top: 28px" for="government"> Pension</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="pension" >
                                <label style="margin-top: 28px" for="government"> Business</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="business" >
                                <label style="margin-top: 28px" for="government"> (Regular</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="regular" >
                                <label style="margin-top: 28px" for="government"> J.O/Casual)</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="j.o/casual" >
                                <label style="margin-top: 28px" for="government"> Others</label>
                            <div class="col-md-5">
                                <div class="form-group">
                                <input class="form-control"  placeholder="others" style="margin-left: -12px; margin-top: 10px;/"></input>
                                </div>
                           </div>
                         </div>
                             <div class="card-5" style="float: right; margin-inline: 100px; margin-top: -330px;">
                            <h3 class="m-2" style="font-size: 1.75rem; font-weight: 600;">Estemated Monthly Income:</h3>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label></label>
                                <input class="form-control" name="personal"  placeholder="Personal" style="margin-left: -2px; margin-top: -29px;"></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                                <div class="form-group">
                            <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="">
                                <label style="margin-top: 1px" for="government"> Less than 10,000</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox">
                                <label style="margin-top: 28px" for="government"> 10,001-20,000</label>
                                <input style="margin: revert; margin-top: 14px"type="checkbox" id="vehicle3" name="" >
                                <label style="margin-top: 28px" for="government"> 20,001-30,000</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle2" name="" >
                                <label style="margin-top: 28px" for="government"> 30,001-50,000</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle2" name="" >
                                <label style="margin-top: 28px" for="government"> 50,001-75,000</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle3" name="" >
                                <label style="margin-top: 28px" for="government"> 75,000-100,000</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle2" name="" >
                                <label style="margin-top: 28px" for="government"> Over 100,000</label>
                              </div>
                              </div>
                            </div>
                        </form>
                        <center>
               <div class="col-md-5">
                  <button type="submit" class="btn btn-primary" style="background-color: black;">Save</button>
               </div>
               </center>
            </div>
         </form>
      </div>  
</div>
      
@endsection
