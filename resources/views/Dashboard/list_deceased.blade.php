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
        <h3 class="m-0 font-weight-bold text-primary">List of Deceased Records</h3>
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
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($deceasedRecords as $deceased)
                    <tr>
                        <td>{{$deceased->firstname}}</td>
                        <td>{{$deceased->middlename}}</td>
                        <td>{{$deceased->lastname}}</td>
                        <td>{{$deceased->suffix}}</td>
                        <td>{{$deceased->age}}</td>
                        <td>{{$deceased->sex}}</td>
                        <td>{{$deceased->purok}}</td>

                        <td class="text-center">
                        <a href="{{ url('/Lists/view/').'/'.$deceased->id}}" class="btn btn-primary btn-sm">View</a>
                                                     </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
