@extends('layouts.default')

@section('content')
    <link href="{{ asset('style/style.css')}}" rel="stylesheet">

  <div class="container mt-12" style="font-weight: 800;"  >
        <div class="card mb-7" style="max-width: 500px;  ">
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
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <!-- <i class="fas fa-globe fa-lg text-warning"></i> -->
                <p class="mb-4"><span class="text-primary font-italic me-1">Contact Details</span> 
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Landline:</p>
                <p class="mb-0"></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Contact Number:</p>
                <p class="mb-0"></p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <p class="mb-0">Email Address:</p>
                <p class="mb-0"></p>
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
                <p class="mb-4"><span class="text-primary font-italic me-1">Residents Address</span> 
                <p class="mt-4 mb-1" style="font-size: medium;">Household Number:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">No. Of Household Members:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Purok:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->purok}} </p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Barangay:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">City/Municipality:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">Province:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">Region:</p>
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
                <p class="mb-1" style="font-size: medium;">Elementary:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->elementary}} </p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">High School:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->high_school}} </p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Senior High:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->senior_high}}  </p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">College:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->college}} </p>
              </div>
              <p class="mt-4 mb-1" style="font-size: medium;">Vocational:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">{{$resident->Vocational}} </p>
              </div>
               
              </div>
            </div>
          </div>
           <div class="row" style="margin-top: 30px;   margin-left: -9.75rem;">
          <div class="col-md-12">
            <div class="card mb-12 mb-md-12" style="float: left; margin-inline: -780px; margin-top: 220px; width: 288px;">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Family Background</span> 
                <p class="mb-1" style="font-size: medium;">Mother's Name:</p>
               <div class="col-sm-9">
                <p class="text-muted mb-0">Marian</p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Father's Name:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">Julian</p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Guardian:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0"></p>
              </div>
              </div>
            </div>
          </div>

          <div class="row" style="margin-top: 30px;   margin-left: -9.75rem;">
          <div class="col-md-12">
            <div class="card mb-12 mb-md-12" style="float: right; margin-inline: 0px; margin-top: -120px; width: 288px;">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">Occupation</span> 
                <p class="mb-1" style="font-size: medium;">Status of Employment:</p>
               <div class="col-sm-9">
                <p class="text-muted mb-0">employed</p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Category of Employment:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">private</p>
              </div>
                <p class="mt-4 mb-1" style="font-size: medium;">Types of Employment:</p>
                <div class="col-sm-9">
                <p class="text-muted mb-0">freelancer</p>
              </div>
               
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</section>


</div>

@endsection