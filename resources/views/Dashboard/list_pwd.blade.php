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
        <h3 class="m-0 font-weight-bold text-primary">List of PWD Records</h3>
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
                    @foreach($listRecords as $PWD)
                    <tr>
                        <td>{{$PWD->firstname}}</td>
                        <td>{{$PWD->middlename}}</td>
                        <td>{{$PWD->lastname}}</td>
                        <td>{{$PWD->suffix}}</td>
                        <td>{{$PWD->age}}</td>
                        <td>{{$PWD->sex}}</td>
                        <td>{{$PWD->purok}}</td>

                        <td class="text-center">
                        <a href="{{ url('/Lists/view/').'/'.$PWD->id}}" class="btn btn-primary btn-sm">View</a>
                                                     </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
