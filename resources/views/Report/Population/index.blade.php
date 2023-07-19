 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0" style="border-radius: 100px;"> List of Residents</h1>
         </div>
            <div class="col-sm-6">
            </div>
         </div>
      </div>
      <div class="row card p-">
               <div class="card-header">
              
                     <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <br>
                  <div class="col-md-12">
                     <table id="example1" class="table table-hover">
                        <thead>
                           <tr>
                              <th>Poruk</th>
                              <th>Male</th>
                              <th>Female</th>
                              <th>Total Household</th>
                              <th>Total </th>
                              <th>Purok</th>
                              <th>Address</th>
                              <th class="text-center">Action</th>
                           </tr>

                        </thead>
                        <tbody>
                          @foreach($residents as $ResidentProfile)
                           <tr>
                         
                              <td>{{$ResidentProfile->firstname}}</td>
                              <td>{{$ResidentProfile->middlename}}</td>
                              <td>{{$ResidentProfile->lastname}}</td>
                              <td>{{$ResidentProfile->suffix}}</td>
                              <td>{{$ResidentProfile->age}}</td>
                            <!--   <td>{{$ResidentProfile->date_of_birth}}</td>
                              <td>{{$ResidentProfile->place_of_birth}}</td> -->
                              <td>{{$ResidentProfile->purok}}</td>
                              <td>{{$ResidentProfile->address}}</td>
                              <td class="text-center">
                                 <a class="btn btn-sm btn-success" href="{{ url('/Lists/edit/').'/'.$ResidentProfile->id}}" ><i
                                       class="fa fa-edit"></i> Update</a>

                                  <a class="btn btn-sm btn-success" href="{{ url('/Lists/view/').'/'.$ResidentProfile->id}}" ><i
                                       class="fa fa-edit"></i>View</a>

                                 <a class="btn btn-sm btn-danger" href="{{ url('/Lists/delete/').'/'.$ResidentProfile->id}}" ><i></i> Delete</a>
                                        {{method_field('DELETE') }}
                                        @csrf
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </section>
               </center>
            </div>
      </div>  
</div>
      
@endsection

            