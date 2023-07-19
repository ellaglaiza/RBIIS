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
                               <div class="col-md-12">
                              <div class="form-group">
                                <label>Civil Status</label>
                                <input class= "form-control" name="civil_status"placeholder="" ></input>
                              </div>
                               </div>
 
                               <h3 class="m-2">Educational Background</h3>
              
                            <div class="col-md-8">
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

                            <div class="col-md-8">
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

                            <div class="col-md-8">
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
                                <label>Degree Recived</label>
                                <input class="form-control" name="degree"  placeholder=""></input>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Special Skills</label>
                                <input class="form-control" name="specialskills"  placeholder=""></input>
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

            