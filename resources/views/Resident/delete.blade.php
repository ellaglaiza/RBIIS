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
         <form action="{{ route('list.edit.delete') }}"  method="post">
            @csrf
            
            <h3 class="m-1"  style="font-weight: bolder; font-size: 30px; margin-top: -333px;">Update</h3>
                   
                        <div class="col-md-12" style="  margin-top: 15px;">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                  <label style="font-family: emoji; font-weight: 500;"  >First Name</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="firstname"  class="form-control" value="{{$resident->firstname}}" >
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Middle Name</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="middlename"  class="form-control"  value="{{$resident->middlename}}">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Last Name </label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="lastname" class="form-control"  value="{{$resident->lastname}}" >
                              </div>
                           </div>

                           <div class="col-md-1">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;"> Suffix </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="suffix"  value="{{$resident->suffix}}"></input>
                              </div>
                           </div>
                              <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Citizenship</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="citizenship" placeholder="" value="{{$resident->citizenship}}"></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Religion</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="religion" placeholder="" value="{{$resident->religion}}"></input>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Place of Birth</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="place_of_birth" placeholder="" value="{{$resident->place_of_birth}}"></input>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Date of Birth</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input type="date" class= "form-control" id="date_of_birth" name="date_of_birth" placeholder="" value="{{$resident->date_of_birth}}"></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Age</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="age" id="age" placeholder="" value="{{$resident->age}}"></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Sex </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <select class="form-control" name="sex" value="{{$resident->sex}}">
                                  <option disabled>Select Sex</option>
                                  <option>Male</option>
                                  <option>Female</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Civil Status </label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">
                                 <select class="form-control" name="civil_status" value="{{$resident->civil_status}}">
                                  <option disabled>Select Civil Status</option>
                                  <option>Single</option>
                                  <option>Married</option>
                                  <option>Widow</option>
                                  <option>Separated</option>
                                </select>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Remarks(Other Info)</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">
                                 <select class="form-control" name="remarks" value="{{$resident->remarks}}" >
                                  <option></option>
                                  <option>PWD</option>
                                  <option>Solo Parent</option>
                                  <option>Childrens Out of School 15-24 yrs. old</option>
                                  <option>Belongs to Indigenous People</option> </select>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Household (with/without) Toilets</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <select class="form-control" name="landlineNo" value="{{$resident->landlineNo}}" >
                                  <option></option>
                                  <option>Household with Toilets</option>
                                  <option>Household without Toilets</option>
                                </select>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Residence Address</h3>
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Address</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="address" placeholder="" value="{{$resident->address}}"></input>
                              </div>
                           </div>
                            <div class="col-md-6" style="margin-top: 34px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Household Number:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="householdNO" placeholder="" value="{{$resident->householdNO}}"></input>
                              </div>
                           </div>
                              <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">No. Of Family Members:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input type="number" class= "form-control" name="householdMem" placeholder="" id="household_number" value="{{$resident->household_number}}"></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Purok</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <select name="purok" class="form-control" required=""  value="{{$resident->purok}}">
                                  <option disabled>Select Purok</option>
                                  <option>Santan</option>
                                  <option>Camia</option>
                                  <option>Bougainvilla</option>
                                  <option>Orchids</option>
                                  <option>Rosal</option>
                                  <option>Daisy</option>
                                  <option>Adelfa</option>
                                </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;"> Barangay </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="barangay"  value="{{$resident->barangay}}" ></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">City/Municipality: </label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="city_munipality" class="form-control"  value="{{$resident-> city_munipality}}">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Province</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="province"  id="province" class="form-control" value="{{$resident->province}}">
                              </div>
                           </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Region: </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="region"  class="form-control" value="{{$resident->region}}">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Contact Details</h3>
                               <label style="font-family: emoji; font-weight: 500;">Contact Number:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="contact_number" placeholder="+63" value="{{$resident->contact_number}}"></input>
                              </div>
                           </div>
                           
                              <div class="col-md-6" style="margin-top: 35px;">
                              <div class="form-group">
                                <label for="email" style="font-family: emoji; font-weight: 500;">Email Address:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input type="email" class= "form-control" name="email" placeholder="" value="{{$resident->email}}"></input>
                              </div>
                           </div>
                           <hr>
                           <div class="col-md-4">
                              <h3 class="m-1" style="font-weight: bolder; font-size: 20px;">Family Background</h3>
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Mother's Name:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="mother_name" placeholder="" value="{{$resident->mother_name}}"></input>
                              </div>
                           </div>
                            <div class="col-md-4" style="margin-top: 34px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Father's Name:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="father_name" placeholder="" value="{{$resident->father_name}}"></input>
                              </div>
                           </div>
                              <div class="col-md-4" style="margin-top: 33px;">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Guardian:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="guardian" placeholder="" value="{{$resident->guardian}}"></input>
                              </div>
                           </div>
                               <div class="col-md-7">
                              <div class="form-group">
                                  <hr>
                                  <h3 style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                                  <label style="font-family: emoji; font-weight: 500;">Elementary</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">
                                  <input class= "form-control"  name="elementary" placeholder="" value="{{$resident->elementary}}"></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="margin-top: 55px; font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="year_graduated1" placeholder="" value="{{$resident->year_graduated1}}" style="margin-top: 1px;"></input>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">High School</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="high_school" placeholder="" value="{{$resident->high_school}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="year_graduated2" placeholder="" value="{{$resident->year_graduated3}}"></input>
                              </div>
                           </div>
                            <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Senior High School</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="senior_HS" placeholder="" value="{{$resident->senior_HS}}"></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="year_graduated3" placeholder="" value="{{$resident->year_graduated3}}"></input>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">College</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="college" placeholder="" value="{{$resident->college}}"></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">                                
                                 <input class= "form-control"  name="year_graduated4" placeholder="" value="{{$resident->year_graduated4}}"></input>
                              </div>
                           </div>
                             <div class="col-md-7">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Vocational</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="vocational" placeholder="" value="{{$resident->vocational}}"></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Year Graduated</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="year_graduated5" placeholder="" value="{{$resident->year_graduated5}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Degree Received</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="degree_received" placeholder=""  value="{{$resident->degree_received}}"></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Special Skills</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                <input class= "form-control"  name="special_skills" placeholder=""  value="{{$resident->special_skills}}"></input>
                              </div>
                           </div>
                         <div class="col-md-12">
                              <div class="form-group">
                                  <hr>
                                  <h3 style="font-weight: bolder; font-size: 20px;">Occupation</h3>
                                  <label></label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                  <input class= "form-control"  name="occupation" placeholder="occupation" value="{{$resident->occupation}}"></input>
                              </div>
                           </div>
                           <div class="col-md-6" style="margin-top: 6px;">
                              <div class="form-group">
                                  <label style="font-family: emoji; font-weight: 500;">Status Of Employment</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                  <select class="form-control" name="status_of_employment" value="{{$resident->status_of_employment}}">
                                    <option>Employed</option>
                                    <option>Unemployed</option>
                                    <option>Self-employed</option>
                                   
                                  </select>
                              </div>
                           </div>
                            <div class="col-md-6" style="margin-top: 6px;">
                              <div class="form-group">
                                  <label style="font-family: emoji; font-weight: 500;">Types Of Employment</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                  <select class="form-control" name="type_of_employment" value="{{$resident->type_of_employment}}">
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
                                  <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                  <select class="form-control" name="category_of_employment" value="{{$resident->category_of_employment}}">
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
              </div>
              <a href="{{ route('dashboard') }}" class="btn btn-secondary" style="background-color: black; margin-left: 881px; margin-top: -66px;">Back</a>
            </div>
         </form>
      </div>  
</div>
<script>
   const dateOfBirthInput = document.getElementById('date_of_birth');
   const ageInput = document.getElementById('age');

   dateOfBirthInput.addEventListener('input', function() {
      const dob = new Date(this.value);
      
      const currentDate = new Date();

      const age = currentDate.getFullYear() - dob.getFullYear();

      ageInput.value = age;
   });
</script>
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
