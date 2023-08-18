 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0">Update</h1>
         </div>
          
      <div class="row card p-5" style="background-color: white;">
       @include('layouts.partials.messages')
         <form action="{{ route('list.edit.delete') }}"  method="post">
            @csrf
            <div class="col-md-12">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Firstname</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="firstname" value="{{$resident->firstname}}" class="form-control" placeholder="Enter Full Name">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Middle Name</label>
                                  <input type="hidden" name="id" value="{{$resident->id}}">
                                  <input type="text" name="middlename" value="{{$resident->middlename}}" class="form-control" placeholder="Middlename">
                              </div>
                           </div>
                           
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Last name</label>
                                 <input type="hidden" name="id" value="{{$resident->id}}">
                                 <input type="text" name="lastname" value="{{$resident->lastname}}" class="form-control" placeholder="lastname">
                              </div>
                           </div>

                           <div class="col-md-1">
                              <div class="form-group">
                                <label> Suffix </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="suffix" value="{{$resident->suffix}}" ></input>
                              </div>
                           </div>
                            <div class="col-md-1">
                              <div class="form-group">
                                <label>Age</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="age" value="{{$resident->age}}" placeholder=""></input>
                              </div>
                           </div>
                          <!--   <div class="col-md-1">
                              <div class="form-group">
                                <label>Date_of_Birth</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="date_of_birth" value="{{$resident->date_of_birth}}" placeholder=""></input>
                              </div>
                           </div> -->
                           <div class="col-md-1">
                              <div class="form-group">
                                <label>Place of Birth</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="place_of_birth" value="{{$resident->place_of_birth}}" placeholder=""></input>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label>Purok </label>
                             <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class="form-control" name="purok" value="{{$resident->purok}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Address</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="address" value="{{$resident->address}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Sex</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="sex" value="{{$resident->sex}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Citizenship</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="citizenship" value="{{$resident->citizenship}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Religion</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="religion" value="{{$resident->religion}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Civil Status</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="civil_status" value="{{$resident->civil_status}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Elementary</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="elementary" value="{{$resident->elementary}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>High School</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="high_school" value="{{$resident->high_school}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>College</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="college" value="{{$resident->college}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Degree Received</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="degree_received" value="{{$resident->degree_received}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Special Skills</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="special_skills" value="{{$resident->special_skills}}" placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label></label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="year_graduated" value="{{$resident->year_graduated}}" placeholder=""></input>
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
      


            