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
         <form action="{{ route('list.edit.save') }}"  method="post">
            @csrf
            
            <h3 class="m-1"  style="font-weight: bolder; font-size: 30px; margin-top: -333px;">Update</h3>
                     <a href="{{ route('dashboard') }}" class="btn btn-secondary" style="background-color: green; margin-left: 881px; margin-top: -90px;">Back</a>
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
                                <select class="form-control" name="sex">
                                    <option value="" disabled>Select Sex</option>
                                    <option value="Male" <?php echo ($resident->sex === 'Male') ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php echo ($resident->sex === 'Female') ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                        </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Civil Status </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <select class="form-control" name="civil_status">
                                    <option value="" disabled>Select Civil Status</option>
                                    <option value="Single" <?php echo ($resident->civil_status === 'Single') ? 'selected' : ''; ?>>Single</option>
                                    <option value="Married" <?php echo ($resident->civil_status === 'Married') ? 'selected' : ''; ?>>Married</option>
                                    <option value="Widow" <?php echo ($resident->civil_status === 'Widow') ? 'selected' : ''; ?>>Widow</option>
                                    <option value="Separated" <?php echo ($resident->civil_status === 'Separated') ? 'selected' : ''; ?>>Separated</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Remarks</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="remarks" placeholder="" value="{{$resident->remarks}}"></input>
                              </div>
                           </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Other Info</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <select class="form-control" name="outofschool">
                                    <option value=""></option>
                                    <option value="Out of School Children(OSC) (6-14 years old)" <?php echo ($resident->outofschool === 'Out of School Children(OSC) (6-14 years old)') ? 'selected' : ''; ?>>Out of School Children(OSC) (6-14 years old)</option>
                                    <option value="Out of School Youth(OSy) (15-24 years old)" <?php echo ($resident->outofschool === 'Out of School Youth(OSy) (15-24 years old)') ? 'selected' : ''; ?>>Out of School Youth(OSy) (15-24 years old)</option>
                                    <option value="Labor Force" <?php echo ($resident->outofschool === 'Labor Force') ? 'selected' : ''; ?>>Labor Force</option>
                                    <option value="Deceased" <?php echo ($resident->outofschool === 'Deceased') ? 'selected' : ''; ?>>Deceased</option>
                                    <option value="Transferred" <?php echo ($resident->outofschool === 'Transferred') ? 'selected' : ''; ?>>Transferred</option>
                                    <option value="New" <?php echo ($resident->outofschool === 'New') ? 'selected' : ''; ?>>New</option>
                                </select>
                            </div>
                        </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;"> (PhilSys Card No.)</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input class= "form-control" name="landlineNo" placeholder=""></input>
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
                            <div class="col-md-6">
                            <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500; margin-top: 33px;">Purok</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <select name="purok" class="form-control" required="">
                                    <option value="" disabled>Select Purok</option>
                                    <option value="Santan" <?php echo ($resident->purok === 'Santan') ? 'selected' : ''; ?>>Santan</option>
                                    <option value="Camia" <?php echo ($resident->purok === 'Camia') ? 'selected' : ''; ?>>Camia</option>
                                    <option value="Bougainvilla" <?php echo ($resident->purok === 'Bougainvilla') ? 'selected' : ''; ?>>Bougainvilla</option>
                                    <option value="Orchids" <?php echo ($resident->purok === 'Orchids') ? 'selected' : ''; ?>>Orchids</option>
                                    <option value="Rosal" <?php echo ($resident->purok === 'Rosal') ? 'selected' : ''; ?>>Rosal</option>
                                    <option value="Daisy" <?php echo ($resident->purok === 'Daisy') ? 'selected' : ''; ?>>Daisy</option>
                                    <option value="Adelfa" <?php echo ($resident->purok === 'Adelfa') ? 'selected' : ''; ?>>Adelfa</option>
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
                                <select name="region" class="form-control">
                                    <option value="{{ $resident->region }}" selected>{{ $resident->region }}</option>
                                    <!-- Ang option nga gitagana kini maoy ipakita nga selected sa dropdown -->
                                </select>
                            </div>
                        </div>                         
                              <div class="col-md-6">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">No. Of Family Members:</label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input type="number" class= "form-control" name="nooffamilymember" placeholder="" id="nooffamilymember" value="{{$resident->nooffamilymember}}"></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                        <div class="form-group">
                            <label style="font-family: emoji; font-weight: 500;">Number of Families inside the Household:</label>
                            <input type="hidden" name="id" value="{{$resident->id}}">
                            <input class="form-control" name="family_id" placeholder="" id="family_id" value="{{$resident->family_id}}" oninput="showHouseholdNumber()">
                        </div>
                          </div>
                         <div class="col-md-12" style="display: none;" id="household_number_div">
                          <div class="form-group">
                                  <label style="font-family: emoji; font-weight: 500;">Household Number:</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                  <input class="form-control" name="householdNO" placeholder="" id="householdNO" value="{{$resident->householdNO}}">
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
                        <div class="col-md-12">
                        <div class="form-group">
                            <hr>
                            <h3 style="font-weight: bolder; font-size: 20px;">Educational Background</h3>
                            <label style="font-family: emoji; font-weight: 500;">HIGHEST EDUCATIONAL ATTAINMENT:</label>
                            
                            <?php
                            // Assuming $resident->members_school is a string containing comma-separated values
                            $educationalBackgrounds = explode(', ', $resident->members_school);
                            
                            $educationalOptions = ['ELEMENTARY', 'HIGH SCHOOL', 'COLLEGE', 'POST GRAD', 'VOCATIONAL'];
                            
                            foreach ($educationalOptions as $option) {
                                // Check if the current option exists in the array obtained from the database
                                $checked = in_array($option, $educationalBackgrounds) ? 'checked' : '';
                            ?>
                                <label>
                                    <input type="checkbox" name="members_school[]" value="<?php echo $option; ?>" <?php echo $checked; ?>>
                                    <?php echo $option; ?>
                                </label>
                            <?php } ?>
                        </div>
                    </div>


                                            <div class="col-md-5">
                        <div class="form-group" style="margin-top: -12px">
                            <label style="font-family: emoji; font-weight: 500;">Please Specify:</label>
                            @php
                                // Assuming $resident->specify is a string containing comma-separated values
                                $specifyValues = explode(', ', $resident->specify);
                                
                                $specifyOptions = ['Graduate', 'Under Graduate'];
                            @endphp
                            
                            @foreach ($specifyOptions as $option)
                                @php
                                    // Check if the current option exists in the array obtained from the database
                                    $checked = in_array($option, $specifyValues) ? 'checked' : '';
                                @endphp
                                <label>
                                    <input type="checkbox" name="specify[]" value="{{ $option }}" {{ $checked }}>
                                    {{ $option }}
                                </label>
                            @endforeach
                        </div>
                    </div>

                         <div class="col-md-12">
                              <div class="form-group">
                                  <hr>
                                  <h3 style="font-weight: bolder; font-size: 15px;">Occupation</h3>
                                  <label></label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">                                 
                                  <input class= "form-control"  name="occupation" placeholder="occupation" value="{{$resident->occupation}}"></input>
                              </div>
                           </div>
                          <div class="col-md-12" style="margin-top: 15px;">
                          <div class="form-group">
                              <label style="font-family: emoji; font-weight: 500;">Status Of Employment</label>
                              <input type="hidden" name="id" value="{{$resident->id}}">
                              <select class="form-control" name="status_of_employment">
                                  <option value="Employed" <?php echo ($resident->status_of_employment === 'Employed') ? 'selected' : ''; ?>>Employed</option>
                                  <option value="Unemployed" <?php echo ($resident->status_of_employment === 'Unemployed') ? 'selected' : ''; ?>>Unemployed</option>
                                  <option value="Self-employed" <?php echo ($resident->status_of_employment === 'Self-employed') ? 'selected' : ''; ?>>Self-employed</option>
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
  $(document).on('change', 'input[name="members_dob[]"]', function() {
    const dateOfBirthInput = this;
    const ageInput = $(this).closest('.col-md-4').next().find('input[name="members_age[]"]');

    const dob = new Date(dateOfBirthInput.value);
    const currentDate = new Date();
    const age = currentDate.getFullYear() - dob.getFullYear();

    ageInput.val(age);
  });
</script>
<script>
  $('#nooffamilymember').on('keyup', function(){
   
    var nooffamilymember = Number($('#nooffamilymember').val());

    if(nooffamilymember > 1){
        $('#household_form').removeAttr('hidden');
        $('#household_form_member').empty();
        for(let x = 0; x < (nooffamilymember-1); x++){
          $('#household_form_member').append('<div class="col-md-3"><div class="form-group"><label>Firstname:</label><input class= "form-control" name="members_name[]" placeholder=""></input></div></div><div class="col-md-3"><div class="form-group"><label>Middlename:</label><input class= "form-control" name="members_middlename[]" placeholder=""></input></div></div><div class="col-md-3"><div class="form-group"><label>Lastname:</label><input class= "form-control" name="members_lastname[]" placeholder=""></input></div></div><div class="col-md-3"><div class="form-group"><label>Suffix:</label><input class= "form-control" name="members_qualifier[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Address:</label><input class= "form-control" name="members_address[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Date of Birth:</label><input type="date" class= "form-control" name="members_dob[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Age:</label><input class= "form-control" name="members_age[]" placeholder=""></input></div></div><div class="col-md-3"><div class="form-group"><label>Place of Birth:</label><input class= "form-control" name="members_placeofbirth[]" placeholder=""></input></div></div> <div class="col-md-3"><div class="form-group"> <label style="font-family: emoji; font-weight: 500;">Sex </label><select class="form-control" name="members_sex[]"><option disabled>Select Sex</option><option>Male</option><option>Female</option></select></div></div><div class="col-md-3"><div class="form-group"> <label style="font-family: emoji; font-weight: 500;">Civil Status </label><select class="form-control" name="members_civilstatus[]"><option disabled>Select civil status</option><option>Single</option><option>Married</option><option>Widow</option><option>Separated</option></select></div></div><div class="col-md-3"><div class="form-group"><label>Religion:</label><input class= "form-control" name="members_religion[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Citizenship:</label><input class= "form-control" name="members_relationship[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Occupation:</label><input class= "form-control" name="members_occupation[]" placeholder=""></input></div></div><div class="col-md-4"><div class="form-group"><label>Remarks:</label><input class= "form-control" name="members_remark[]" placeholder=""></input></div></div>');
        }
    } else {
      $('#household_form').attr('hidden','hidden');
    }
    console.log((nooffamilymember-1));
    console.log(nooffamilymember);
  })
</script>

<script>
    function showHouseholdNumber() {
        let householdNumberDiv = document.getElementById('household_number_div');
        let numFamiliesInput = document.getElementById('family_id');
        if (numFamiliesInput.value !== '') {
            householdNumberDiv.style.display = 'block';
        } else {
            householdNumberDiv.style.display = 'none';
        }
    }
     let xhr = new XMLHttpRequest();
    let url = 'https://ph-locations-api.buonzz.com/v1/regions?page=philippines';

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let responseData = JSON.parse(xhr.responseText);
                let regions = responseData.data; // Assuming the regions are in the 'data' property

                if (Array.isArray(regions)) {
                    let select = document.getElementById('regions');

                    regions.forEach(function(region) {
                        let option = document.createElement('option');
                        option.text = region.name;
                        option.value = region.id; // You might want to set a value
                        select.appendChild(option);
                    });
                } else {
                    console.log('Regions data is not an array');
                }
            } else {
                console.log('Error: ' + xhr.status);
            }
        }
    };

    xhr.open('GET', url, true);
    xhr.send();
</script>
@endsection
