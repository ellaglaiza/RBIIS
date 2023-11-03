@extends('layouts.default')

@section('content')
<style type="text/css">
    .form-control{
      color: black;
      margin-top: -8px;
      margin-bottom: -10px;
    }
</style>
<div class="content-header" >
      <div class="container-fluid" >
         <div class="row mb-2">
      <div class="col-sm-6">
<!--          <h1 class="m-0" style="border-radius: 100px;">Add New Resident</h1>
 -->         </div>
            <div class="col-sm-6">
            </div>
         </div>
      </div>
      <div class="row card p-5" style="background-color: white;   padding: 1rem!important;">
        @include('layouts.partials.messages')
         <form action="{{ route('residentprofile.save') }}"  method="post">
            @csrf
            <h3 class="m-1"  style="font-weight: bolder; font-size: 30px; margin-top: -333px;">Personal Information</h3>
                   
                        <div class="col-md-12" style="  margin-top: 15px;">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">First Name</label>
                                 <input type="text" name="firstname"  class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Middle Name</label>
                                 <input type="text" name="middlename"  class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Last Name </label>
                                 <input type="text" name="lastname" class="form-control" >
                              </div>
                           </div>

                           <div class="col-md-1">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;"> Suffix </label>
                                <input class= "form-control" name="suffix"  ></input>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Age</label>
                                <input class= "form-control" name="age" placeholder=""></input>
                              </div>
                           </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Citizenship</label>
                                <input class= "form-control" name="citizenship" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Religion</label>
                                <input class= "form-control" name="religion" placeholder=""></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Place of Birth</label>
                                <input class= "form-control" name="place_of_birth" placeholder=""></input>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Date of Birth</label>
                                <input type="date" class= "form-control" name="date_of_birth" placeholder=""></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Sex </label>
                                <select class="form-control" name="sex">
                                  <option disabled>Select Sex</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Civil Status </label>
                                <input class="form-control" name="civil_status"  placeholder=""></input>
                              </div>
                           </div>
                             <div class="col-md-12">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Remarks(Other Info)</label>
                                <input class="form-control" name="remarks"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Residence Address</h3>
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Address</label>
                                <input class= "form-control" name="address" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-6" style="margin-top: 34px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Household Number:</label>
                                <input class= "form-control" name="HouseholdNo" placeholder=""></input>
                              </div>
                           </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">No. Of Household Members:</label>
                                <input type="number" class= "form-contro  l" name="householdMem" placeholder="" id="household_number"></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Purok</label>
                                <select name="purok" class="form-control" required="">
                                  <option disabled>Select Purok</option>
                                  @foreach($puroks as $purok)
                                  <option>{{ $purok->purok_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;"> Barangay </label>
                                <input class= "form-control" name="barangay"  ></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">City/Municipality: </label>
                                 <input type="text" name="city_munipality" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Province</label>
                                 <input type="text" name="province"  id="province" class="form-control" >
                              </div>
                           </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Region: </label>
                                 <input type="text" name="region"  class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                               <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Contact Details</h3>
                                <label style="font-family: emoji; font-weight: 500;">Landline Number:</label>
                                <input class= "form-control" name="landlineNo." placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4" style="margin-top: 34px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Contact Number:</label>
                                <input class= "form-control" name="contact_number" placeholder="+63"></input>
                              </div>
                           </div>
                              <div class="col-md-4" style="margin-top: 35px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Email Address:</label>
                                <input class= "form-control" name="email_add" placeholder=""></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Family Background</h3>
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Mother's Name:</label>
                                <input class= "form-control" name="mother_name" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-4" style="margin-top: 34px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Father's Name:</label>
                                <input class= "form-control" name="father_name" placeholder=""></input>
                              </div>
                           </div>
                              <div class="col-md-4" style="margin-top: 33px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Guardian:</label>
                                <input class= "form-control" name="guardian" placeholder=""></input>
                              </div>
                           </div>
                               <div class="col-md-7">
                              <div class="form-group">
                                  <hr>
                                  <h3 style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                                  <label style="font-family: emoji; font-weight: 500;">Kindergarten</label>
                                  <input class= "form-control"  name="kindergarten" placeholder="" ></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="margin-top: 55px; font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input class= "form-control"  name="year_graduated1" placeholder="" style="margin-top: 1px;"></input>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Elementary</label>
                                <input class= "form-control"  name="elementary" placeholder="" ></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input class= "form-control"  name="year_graduated2" placeholder="" ></input>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">High School</label>
                                <input class= "form-control"  name="high_school" placeholder="" ></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input class= "form-control"  name="year_graduated3" placeholder="" ></input>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">College</label>
                                <input class= "form-control"  name="college" placeholder=""></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input class= "form-control"  name="year_graduated4" placeholder="" ></input>
                              </div>
                           </div>
                             <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Vocational</label>
                                <input class= "form-control"  name="vocational" placeholder=""></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input class= "form-control"  name="year_graduated5" placeholder="" ></input>
                              </div>
                           </div>
                          
                           <div class="col-md-12">
                              <div class="form-group">
                                  <hr>
                                  <h3 style="font-weight: bolder; font-size: 20px;">Occupation</h3>
                                  <label></label>
                                  <input class= "form-control"  name="occupation" placeholder="occupation" ></input>
                              </div>
                           </div>
                           <div class="col-md-6" style="margin-top: 6px;">
                              <div class="form-group">
                                  <label style="font-family: emoji; font-weight: 500;">Status Of Employment</label>
                                  <select class="form-control" name="status_of_employment">
                                    <option></option>
                                    <option>Employed</option>
                                    <option>Unemployed</option>
                                    <option>Self-employed</option>
                                   
                                  </select>
                              </div>
                           </div>
                            <div class="col-md-6" style="margin-top: 6px;">
                              <div class="form-group">
                                  <label style="font-family: emoji; font-weight: 500;">Types Of Employment</label>
                                  <select class="form-control" name="types_of_employment">
                                    <option></option>
                                    <option>Permanent/Regular</option>
                                    <option>Seanonal</option>
                                    <option>Casual</option>
                                    <option>Emergency</option>
                                  </select>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
 
                                  <label style="margin-top: 6px; font-family: emoji; font-weight: 500;">Category Of Employment</label>
                                  <select class="form-control" name="category_of_employment">
                                    <option></option>
                                    <option>Government</option>
                                    <option>Private</option>
                                  </select>
                              </div>
                           </div>

                           <div class="col-md-12" id="household_form" hidden>
                              <div class="form-group">
                                <hr>
                                <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Household Members</h3>
                              </div>
                              <div class="row" id="household_form_member">

                              </div>
                           </div>

                                            </form>

                      
                        <center>
               <div class="col-md-5">
                  <button type="submit" class="btn btn-primary" style="background-color: black; margin-top: 10px;">Save</button>
               </div>
               </center>
            </div>
         </form>
      </div>  
</div>
<script src="{{ asset('assets/jquery-3.7.1.min.js') }}"></script>
<script>
  $('#household_number').on('keyup', function(){
   
    var household_number = Number($('#household_number').val());

    if(household_number > 1){
        $('#household_form').removeAttr('hidden');
        $('#household_form_member').empty();
        for(let x = 0; x < (household_number-1); x++){
          $('#household_form_member').append('<div class="col-md-4"><div class="form-group"><label>Name:</label><input class= "form-control" name="members_name[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Date of Birth:</label><input type="date" class= "form-control" name="members_dob[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Relationship:</label><input class= "form-control" name="members_relationship[]" placeholder=""></input></div></div>');
        }
    } else {
      $('#household_form').attr('hidden','hidden');
    }

    
    
    
    console.log((household_number-1));
    console.log(household_number);
  })
</script>
@endsection
