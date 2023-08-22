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
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                <hr>
                 <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                   <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Firstname</h6>
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
                      <h6 class="mb-0">Firstname</h6>
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
                      <h6 class="mb-0">Purok</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $resident->purok }}
                    </div>
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

            