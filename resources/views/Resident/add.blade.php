 @extends('layouts.default')

@section('content')
<style type="text/css">
    .form-control{
      color: black;
      margin-top: -8px;
      margin-bottom: -10px;

    }
</style>
<div class="content-header">
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
            <h3 class="m-1" >Personal Information</h3>

            <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Firstname</label>
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
                                 <label>Last name</label>
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
                              <div class="col-md-4">
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
                           <div class="col-md-6">
                              <div class="form-group">
                                <label>Purok </label>
                                <input class="form-control" name="purok"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Address</label>
                                <input class= "form-control" name="address"placeholder="" ></input>
                              </div>
                               </div>
                                <div class="col-md-6">
                              <div class="form-group">
                                <label>Sex</label>
                                <input class= "form-control" name="sex"placeholder="" ></input>
                              </div>
                               </div>
<!-- <<<<<<< HEAD -->
                               <div class="col-md-12">
                              <div class="form-group">
                                <label>Civil Status</label>
                                <input class= "form-control" name="civil_status" placeholder="" ></input>
                              </div>
                               </div>
 
                             
                              <!-- <div class="card-"> -->
                               <label>Civil Status:</label>
                                <input  style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label style="margin-top: 19px" for="vehicle1"> Single</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label style="margin-top: 19px" for="vehicle2"> Married</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label style="margin-top: 19px" for="vehicle3"> Widow</label>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label style="margin-top: 19px" for="vehicle3"> Separeted</label>
                          <!--     </div> -->
                               <h3 class="m-1" style="font-size: 1.75rem font-weight: 600">Educational Background</h3>
<!-- >>>>>>> 551089173053e275d4aab62d76b2ba20e99693a3 -->
              
                            <div class="col-md-7">
                              <div class="form-group">
                                <label>Elementary </label>
                                <input class="form-control" name="elementary"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Year Graduated:</label>
                                <input class="form-control" name="yeargraduated"  placeholder=""></input>
                              </div>
                           </div>

                            <div class="col-md-7">
                              <div class="form-group">
                                <label>High School </label>
                                <input class="form-control" name="highschool"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Year Graduated:</label>
                                <input class="form-control" name="yeargraduated"  placeholder=""></input>
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
                                <input class="form-control" name="yeargraduated"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Degree Received</label>
                                <input class="form-control" name="degree_received"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Special Skills</label>
                                <input class="form-control" name="special_skills"  placeholder=""></input>
                              </div>
                           </div>
                           <div class="card-">
                            <h3 class="m-2" style="font-size: 1.75rem">Occupation:</h3>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label></label>
                                <input class="form-control" name="special_skills"  placeholder="Occupation" style="margin-left: -12px;"></input>
                              </div>
                           </div>
                            <p style="margin-top: 27px">Source of Living:</p>
                            <input style="margin: revert; margin-top: 14px" type="checkbox" id="occupation" name="">
                                <label style="margin-top: 1px" for="government"> Employment</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox">
                                <label style="margin-top: 28px" for="government"> Government</label><br>
                                <input style="margin: revert; margin-top: 14px"type="checkbox" id="vehicle3" name="" >
                                <label style="margin-top: 28px" for="government"> Private</label>
                                <label style="margin-top: 28px" for="government"> Remitance</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle2" name="" >
                                <label style="margin-top: 28px" for="government"> Pension</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle3" name="" >
                                <label style="margin-top: 28px" for="government"> Business</label>
                                <label style="margin-top: 28px" for="government"> (Regular</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle2" name="" >
                                <label style="margin-top: 28px" for="government"> J.O/Casual)</label><br>
                                <input style="margin: revert; margin-top: 14px" type="checkbox" id="vehicle3" name="" >
                                <label style="margin-top: 28px" for="government"> Others</label>
                                 <div class="col-md-12">
                              <div class="form-group">
                                <label></label>
                                <input class="form-control"  placeholder="others" style="margin-left: -12px;"></input>
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

            