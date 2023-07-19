@extends('layouts.default')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
           
        </div>
    </div>
   
    <div class="row card p-5" style="background-color: white;">
      @include('layouts.partials.messages')
         <form action="{{ route('list.edit.view') }}"  method="post">
          @csrf
            <div class="col-md-12">
               <div class="card-header"></div>
                        <div class="row">
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
                             <div class="col-md-2">
                              <div class="form-group">
                                <label>Age</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="age" value="{{$resident->age}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="form-group">
                                <label>Purok </label>
                             <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class="form-control" name="purok" value="{{$resident->purok}}"></input>
                              </div>
                           </div>
                            <div class="col-md-5">
                              <div class="form-group">
                                <label>Address</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="address" value="{{$resident->address}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Religion</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="religion" value="{{$resident->religion}}" ></input>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label>Citizenship</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="citizenship" value="{{$resident->citizenship}}" ></input>
                              </div>
                           </div>
                             <div class="col-md-4">
                              <div class="form-group">
                                <label>Civil Status</label>
                                   <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control"  name="civil_status" value="{{$resident->civil_status}}" ></input>
                              </div>
                           </div>
                        <center>
            </div>
         </form>
      </div>  
</div>
@endsection