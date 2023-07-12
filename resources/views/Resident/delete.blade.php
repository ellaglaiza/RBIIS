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
               <div class="card-header"></div>
                        <div class="row">
                           <div class="col-md-5">
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

                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Suffix </label>
                                <input type="hidden" name="id" value="{{$resident->id}}">
                                <input class= "form-control" name="suffix" value="{{$resident->suffix}}" placeholder=""></input>
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

            