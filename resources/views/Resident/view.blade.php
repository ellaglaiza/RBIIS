@extends('layouts.default')

@section('content')
    <link href="{{ asset('style/style.css')}}" rel="stylesheet">

  <div class="container mt-12" style="font-weight: 800;"  >
        <div class="card mb-7" style="max-width: 535px;  ">
            <div class="row g-12" style="margin-right: -25.75rem">
                <div class="col-md-12">
          
      <div class="row card p-1" >
      @include('layouts.partials.messages')
         <form action="{{ route('list.edit.view') }}"  method="post">
          @csrf
            <section style="background-color: #eee;">
 
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
              <p class="text-muted mb-0">{{$resident->firstname}} {{$resident->middlename}} {{$resident->lastname}}</p>
            
            <p class="text-muted mb-1"></p>
            <p class="text-muted mb-4"></p>
            <div class="d-flex justify-content-center mb-2">
              
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0" style="  height: 45%;
  width: 309px;">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <p class="mb-0">Place of Birth: </p>
                <p class="mb-0">{{$resident->place_of_birth}}</p>
              </li>
               <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Date of Birth: </p>
                <p class="mb-0">{{$resident->date_of_birth}}</p>
              </li>
               <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Civil Status: </p>
                <p class="mb-0">{{$resident->civil_status}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Religion: </p>
                <p class="mb-0">{{$resident->religion}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Citizenship: </p>
                <p class="mb-0">{{$resident->citizenship}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Contact Number:</p>
                <p class="mb-0">{{$resident->contact_number}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Email Address:  {{$resident->email}}</p>
                <p class="mb-0"></p><hr>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->firstname}} {{$resident->middlename}} {{$resident->lastname}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Sex:</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->sex}}</p>
              </div>
              
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Age:</p>
              </div>
               <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->age}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Purok:</p>
              </div>
               <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->purok}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address:</p>
              </div>
               <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->address}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mt-4 mb-1" style="font-size: medium;">Household Number:  {{$resident->householdNO}}</p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Barangay: {{$resident->barangay}} </p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">City/Municipality:  {{$resident->city_munipality}} </p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">Province: {{$resident->province}} </p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">Region: {{$resident->region}} </p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Educational Background
                </p>
                <p class="mb-1" style="font-size: medium;">Elementary: {{$resident->elementary}}</p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"> </p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">High School: {{$resident->high_school}} </p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Senior High: {{$resident->senior_high}}</p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0">  </p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">College: {{$resident->college}}</p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"> </p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">Vocational: {{$resident->Vocational}}</p><hr>
                <div class="col-sm-9">
                <p class="text-muted mb-0"> </p>
              </div>
               
              </div>
            </div>
          </div>
            <div class="row" style="margin-top: 13px;   margin-left: -9.75rem;">
          <div class="col-md-12">
            <div class="card mb-12 mb-md-12" style="  float: right;
  margin-inline: 0px;
  margin-top: 1px;  width: 450px;  height: 261px;
  margin-left: -155px;">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Family Background</span> 
                <p class="mb-1" style="font-size: medium;">Mother's Name: {{$resident->mother_name}}</p>
               <div class="col-sm-9">
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Father's Name: {{$resident->father_name}}</p>
                <div class="col-sm-9">
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Guardian: {{$resident->guardian}}</p>
                <div class="col-sm-9">
              </div>
              <div class="row" style="margin-top: 30px;   margin-left: -9.75rem;">
          <div class="col-md-12">
            <div class="card mb-12 mb-md-12" style="  margin-inline: 0px;
  margin-top: -218px;
  width: 445px;
  margin-left: 592px;">

              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Occupation</span> 
                <p class="mb-1" style="font-size: medium;">Status of Employment: {{$resident->status_of_employment}}</p>
                <p class="mt-4 mb-1" style="font-size: medium;">Category of Employment: {{$resident->category_of_employment}}</p>
                <p class="mt-4 mb-1" style="font-size: medium;">Types of Employment: {{$resident->type_of_employment}}</p>
                <p class="mt-4 mb-1" style="font-size: medium;">Occupation: {{$resident->occupation}}</p>

              </div>
           </div>
        </div>
               
       <div class="row" style="margin-top: 30px;   margin-left: -9.75rem;">
               <div class="col-md-12">
                  <div class="card mb-12 mb-md-12" style=" float: right;
  margin-inline: 0px;
  margin-top: 7px;
  width: 914px;
  margin-bottom: 30px;
  margin-left: 282px;">
                    
<div class="col-sm-12 text-secondary">
  <div class="col-sm-12">
                      <center><h5 class="mb-0" style="font-weight: bolder;">Household Members</h5></center>
                    </div>
                    <div class="col-sm-12 text-secondary"><hr>
                      <div class="row">
                        <div class="col-md-4"><h6 class="mb-0" style="font-weight: bolder;">NAME</h6></div>
                        <div class="col-md-4"><h6 class="mb-0" style="font-weight: bolder;">DATE OF BIRTH</h6></div>
                        <div class="col-md-4"><h6 class="mb-0" style="font-weight: bolder;">RELATION</h6></div>
                      </div>
                    </div>
                    <div class="col-sm-12 text-secondary"><hr>
                        <?php 
                        $members_firstname = json_decode($resident->members_firstname);
                        $members_dob = json_decode($resident->members_dob);
                        $members_relationship = json_decode($resident->members_relationship);
                        
                        if ($members_firstname !== null && $members_dob !== null && $members_relationship !== null) {
                            for ($x = 0; $x < count($members_firstname); $x++) {
                        ?>
                            <div class="row">
                                <div class="col-md-4"><h6 class="mb-0">{{ $members_firstname[$x] }}</h6></div>
                                <div class="col-md-4"><h6 class="mb-0">{{ $members_dob[$x] }}</h6></div>
                                <div class="col-md-4"><h6 class="mb-0">{{ $members_relationship[$x] }}</h6></div><hr>
                            </div>
                        <?php
                         }
                        }
                        ?>
                    </div>

    <?php 
    if (!empty($resident->members_firstname) && !empty($resident->members_dob) && !empty($resident->members_relationship)) {
        $members_firstname = json_decode($resident->members_firstname);
        $members_dob = json_decode($resident->members_dob);
        $members_relationship = json_decode($resident->members_relationship);
        if (is_array($members_firstname) && is_array($members_dob) && is_array($members_relationship)) {
            for ($x = 0; $x < count($members_firstname); $x++) {
                ?>
                
   <div class="row">
                                      <?php
            }
        } else {
            // Handle the case where the decoded variables are not arrays
            echo "Invalid data for household members.";
        }
    } else {
        // Handle the case where the variables are empty or null
        echo "No household members data available.";
    }
    ?>
</div>
          
    </div>
  </div>
</section>




@endsection



