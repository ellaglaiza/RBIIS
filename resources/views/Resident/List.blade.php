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
<div class="content-header" style="font-weight: 700">
   <section class="content">
      <div class="container-fluid">
         <h3>List</h3>
         <div class="card card-info">

            <div class="col-md-0">
               <table id="example1" class="table table-hover">
                  <thead>
                     <tr>
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Lastname</th>
                        <th>Suffix</th>
                        <th>Age</th>
                        <th>Sex</th>
                        <th>Purok</th>
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
   </section>
</div>
      
@endsection

            