 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0">Add New Residents</h1>
         </div>
          
      <div class="row card p-5" style="background-color: white;">
        @include('layouts.partials.messages')
         <form action="{{ route('residentprofile.save') }}"  method="post">
            @csrf
            <div class="col-md-12">
               <div class="card-header"></div>
                        <div class="row">
                           <div class="col-md-5">
                              <div class="form-group">
                                 <label>Firstname</label>
                                 <input type="text" name="firstname"  class="form-control" placeholder="">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Middle Name</label>
                                 <input type="text" name="middlename"  class="form-control" placeholder="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Last name</label>
                                 <input type="text" name="lastname" class="form-control" placeholder="">
                              </div>
                           </div>

                           <div class="col-md-12">
                              <div class="form-group">
                                <label> Suffix </label>
                                <textarea class= "form-control" name="suffix"  placeholder=""></textarea>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                <label>Purok </label>
                                <textarea class="form-control" name="purok"  placeholder=""></textarea>
                              </div>
                           </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Address</label>
                                <textarea class= "form-control" name="address"placeholder=""></textarea>
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

            