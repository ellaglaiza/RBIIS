 @extends('layouts.default')

@section('content')
<style type="text/css">
   h1{
     margin-top: -292px;
     font-size: 30px;
   }
   .row{
      margin-top: -230px;
      background-color: ;
   }

</style>
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Lists</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Lastname</th>
                        <th>Suffix</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Purok</th>
<<<<<<< HEAD

                        <th class="text-center">Action</th>
                     </tr>

=======
                        <th class="text-center">Action</th>
                     </tr>
>>>>>>> 75d72e283339b3e7eef427576aa04b7116e590a9
                  </thead>
                  <tbody>
                    @foreach($residents as $ResidentProfile)
                     <tr>
<<<<<<< HEAD
                   
=======
>>>>>>> 75d72e283339b3e7eef427576aa04b7116e590a9
                        <td>{{$ResidentProfile->firstname}}</td>
                        <td>{{$ResidentProfile->middlename}}</td>
                        <td>{{$ResidentProfile->lastname}}</td>
                        <td>{{$ResidentProfile->suffix}}</td>
<<<<<<< HEAD
                       <!--  <td> <?php
                              $dob = $ResidentProfile->date_of_birth;
                              
                              $dob = '1994-07-02';
                              $age = date_diff(date_create($dob),date_create(date("Y-m-d")));
                              echo $age->format('%y');
                        ?></td> -->
=======
                        <td>{{$ResidentProfile->age}}</td>
>>>>>>> 75d72e283339b3e7eef427576aa04b7116e590a9
                        <td>{{$ResidentProfile->sex}}</td>
                        <td>{{$ResidentProfile->purok}}</td>
                        <td class="text-center">
                             <a href="{{ url('/Lists/view/').'/'.$ResidentProfile->id}}" class="btn btn-primary btn-sm">View</a>
                           <a class="btn btn-sm btn-success" href="{{ url('/Lists/edit/').'/'.$ResidentProfile->id}}" ><i
                                 class="fa fa-edit"></i> Update</a>
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
         </div>
      </div>
   </section>
</div>
      
@endsection

            