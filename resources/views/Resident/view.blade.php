@extends('layouts.default')

@section('content')
<style type="text/css">
    .form-control{
      color: black;
      margin-top: -20px;
      margin-bottom: -20px;

    }
</style>
 <div class="container mt-2"  >
        <h4 class="m-1" style="background-color: lightgreen;" >Personal Information</h4>
        <div class="card mb-7" style="max-width: 500px;  ">
            <div class="row g-12" style="margin-right: -25.75rem">
                <div class="col-md-12">
          
      <div class="row card p-1" >
      @include('layouts.partials.messages')
         <form action="{{ route('list.edit.view') }}"  method="post">
          @csrf
            <div class="col-md-12">
<!--                <div class="card-header"></div>
  -->                      
                         <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Firstname: </strong> {{ $resident->firstname }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Purok: </strong> {{ $resident->purok }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Middlename: </strong> {{ $resident->middlename }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Address: </strong> {{ $resident->address }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Lastname: </strong> {{ $resident->lastname }}</p>
                              </div>
                           </div>
                          
                             <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Age: </strong> {{ $resident->age }}</p>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Suffix: </strong> {{ $resident->suffix }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Purok: </strong> {{ $resident->purok }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Email Address: </strong> {{ $resident->email_address }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Religion: </strong> {{ $resident->religion }}</p>
                              </div>
                           </div>
                             <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Contact Number: </strong> {{ $resident->contact_number }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Citizenship: </strong> {{ $resident->citizenship }}</p>
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Civil Status: </strong> {{ $resident->civil_status }}</p>
                              </div>
                           </div> 
                            <div class="col-md-6">
                            <div class="form-group">
                               <p><strong>Religion: </strong> {{ $resident->religion }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Place Of Birth </strong> {{ $resident->place_of_birth }}</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                               <p><strong>Date Of Birth: </strong> {{ $resident->date_of_birth }}</p>
                              </div>
                           </div> 
                            <div class="col-md-12">
                              <div class="form-group">
                               <p><strong>Sex: </strong> {{ $resident->sex }}</p>
                              </div>
                           </div> 
                           <!-- <div class="container mt-2"  >
                            <h4 class="m-1" style="background-color: lightgreen;" >Personal Information</h4>
                            <div class="card mb-12" style="max-width: 500px; ">
                                <div class="row g-12" style="margin-right: -25.75rem">
                                    <div class="col-md-12">
                                                  
                            <div class="col-md-8">
                            <div class="form-group">
                               <p><strong>Elementary: </strong> {{ $resident->elementary }}</p>
                              </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                               <p><strong>Year Graduated: </strong> {{ $resident->year_graduated }}</p>
                              </div>
                            </div>
                           <div class="col-md-8">
                              <div class="form-group">
                               <p><strong>High School: </strong> {{ $resident->high_school }}</p>
                              </div>
                           </div>
                           <div class="col-md-4">
                            <div class="form-group">
                               <p><strong>Year Graduated: </strong> {{ $resident->year_graduated }}</p>
                              </div>
                            </div>
                           <div class="col-md-8">
                              <div class="form-group">
                               <p><strong>College: </strong> {{ $resident->college }}</p>
                              </div>
                           </div>
                           <div class="col-md-4">
                            <div class="form-group">
                               <p><strong>Year Graduated: </strong> {{ $resident->year_graduated }}</p>
                              </div>
                            </div>
                          </div> -->
                 </form>
              </div>  
        </div>
      
@endsection

            