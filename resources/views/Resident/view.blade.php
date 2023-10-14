@extends('layouts.default')

@section('content')
    <link href="{{ asset('style/style.css')}}" rel="stylesheet">

  <div class="container mt-2"  >
        <div class="card mb-7" style="max-width: 500px;  ">
            <div class="row g-12" style="margin-right: -25.75rem">
                <div class="col-md-12">
          
      <div class="row card p-1" >
      @include('layouts.partials.messages')
         <form action="{{ route('list.edit.view') }}"  method="post">
          @csrf
            <div class="col-md-12">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="250">
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-3" style="text-align: center;"></h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   
                    </div>
                  </div>
  
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-3">
                      <h7 class="mb-0">Firstname</h7>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $resident->firstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Middlename</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $resident->middlename }} 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Lastname</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $resident->lastname }} 
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Suffix</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->suffix }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Age</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->age }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Purok</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->purok }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-12" >
              <div class="card mb-3" >
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Barangay</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $resident->barangay }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Citizenship</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     {{ $resident->citizenship }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Religion</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       {{ $resident->religion }}
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Place of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->place_of_birth }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->date_of_birth }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->address }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Sex</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->sex }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Civil Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->civil_status }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Elementary</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->elementary }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">High School</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->high_school }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">College</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->college }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Year Graduated</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->year_graduated }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Year Graduated</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->year_graduated }}
                    </div>
                  </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Year Graduated</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->year_graduated }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Degree Received</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->degree_received }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Occupation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->occupation }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Source of Living</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->source_of_living }}
                    </div>
                  </div>
                    <hr>
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Others</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->others }}
                    </div>
                  </div>
                    <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <center><h6 class="mb-0">Household Members</h6></center>
                    </div>
                    <div class="col-sm-12 text-secondary">
                      <div class="row">
                        <div class="col-md-4"><h6 class="mb-0" style="font-weight: bolder;">NAME</h6></div>
                        <div class="col-md-4"><h6 class="mb-0" style="font-weight: bolder;">DATE OF BIRTH</h6></div>
                        <div class="col-md-4"><h6 class="mb-0" style="font-weight: bolder;">RELATION</h6></div>
                      </div>
                    </div>
                    <div class="col-sm-12 text-secondary">
                        <?php 
                        $members_name = json_decode($resident->members_name);
                        $members_dob = json_decode($resident->members_dob);
                        $members_relationship = json_decode($resident->members_relationship);
                        
                        if ($members_name !== null && $members_dob !== null && $members_relationship !== null) {
                            for ($x = 0; $x < count($members_name); $x++) {
                        ?>
                            <div class="row">
                                <div class="col-md-4"><h6 class="mb-0">{{ $members_name[$x] }}</h6></div>
                                <div class="col-md-4"><h6 class="mb-0">{{ $members_dob[$x] }}</h6></div>
                                <div class="col-md-4"><h6 class="mb-0">{{ $members_relationship[$x] }}</h6></div>
                            </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 
    </div>

</div>

@endsection

            