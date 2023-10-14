@extends('layouts.default')

@section('content')
<div class="content-header" style="font-weight: 700;">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0">Update</h1>
         </div>
          
      <div class="row card p-5" style="background-color: white;">
      @include('layouts.partials.messages')
         <form action="{{ route('list.edit.save') }}"  method="post">
          @csrf
            <div class="col-md-12">
               <div class="card-header"></div>
                        <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                 <label>Region</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="region" value="{{$resident->region}}" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Province</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="province" value="{{$resident->province}}" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>City/Municipality</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="city" value="{{$resident->city}}" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Barangay</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="barangay" value="{{$resident->barangay}}" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Household Number</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="household_number" value="{{$resident->household_number}}" class="form-control" >
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                 <label>No. Of Household Members:</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="no_household_member" value="{{$resident->no_household_member}}" class="form-control" >
                              </div>
                           </div>
                           <hr>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Firstname</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="firstname" value="{{$resident->firstname}}" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Middle Name</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">
                                  <input type="text" name="middlename" value="{{$resident->middlename}}" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Last name</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="lastname" value="{{$resident->lastname}}" class="form-control" >
                              </div>
                           </div>

                           <div class="col-md-1">
                              <div class="form-group">
                                <label> Suffix </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="suffix" value="{{$resident->suffix}}" ></input>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group">
                                <label>Age</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="age" value="{{$resident->age}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Citizenship </label>
                             <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class="form-control" name="citizenship" value="{{$resident->citizenship}}"></input>
                              </div>
                           </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Religion </label>
                             <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class="form-control" name="religion" value="{{$resident->religion}}"></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Place of Birth </label>
                             <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class="form-control" name="place_of_birth" value="{{$resident->place_of_birth}}"></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Date of Birth </label>
                             <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class="form-control" name="date_of_birth" value="{{$resident->date_of_birth}}"></input>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                                <label>Sex</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="sex" value="{{$resident->sex}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label>Civil Status</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="civil_status" value="{{$resident->civil_status}}" ></input>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Address</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="address" value="{{$resident->address}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                <label>Purok</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="purok" value="{{$resident->purok}}" ></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Remarks(other info)</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="remarks" value="{{$resident->remarks}}" ></input>
                              </div>
                           </div>

                           <div class="col-md-7">
                              <div class="form-group">
                                  <hr>
                                  <h3 style="font-weight: 600">Educational Background</h3>
                                  <label>Elementary</label>
                                     <input type="hidden" name="id" value="{{$resident->id}}">
                                     <input class= "form-control"  name="elementary" value="{{$resident->elementary}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label style="margin-top: 75px;">Year Graduated</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="year_graduated" value="{{$resident->year_graduated}}" style="margin-top: 1px;"></input>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="form-group">
                                <label>High School</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="high_school" value="{{$resident->high_school}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Year Graduated</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="year_graduated" value="{{$resident->year_graduated}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-7">
                              <div class="form-group">
                                <label>College</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="college" value="{{$resident->college}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Year Graduated</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="year_graduated" value="{{$resident->year_graduated}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-11">
                              <div class="form-group">
                                <label>Degree Received</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="degree_received" value="{{$resident->degree_received}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-11">
                              <div class="form-group">
                                <label>Special Skills</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="special_skills" value="{{$resident->special_skills}}" ></input>
                              </div>
                           </div>
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

            