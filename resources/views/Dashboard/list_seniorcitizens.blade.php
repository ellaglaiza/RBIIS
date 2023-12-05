@extends('layouts.default')

@section('content')
<style type="text/css">
   h1 {
     margin-top: -292px;
     font-size: 30px;
   }
   .row {
      margin-top: -230px;
      background-color: ;
   }
</style>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">List of Senior Citizens</h3>
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
                    @foreach($seniorCitizenRecords as $seniorCitizen)
                    <tr>
                        <td>{{$seniorCitizen->firstname}}</td>
                        <td>{{$seniorCitizen->middlename}}</td>
                        <td>{{$seniorCitizen->lastname}}</td>
                        <td>{{$seniorCitizen->suffix}}</td>
                        <td>{{$seniorCitizen->age}}</td>
                        <td>{{$seniorCitizen->sex}}</td>
                        <td>{{$seniorCitizen->purok}}</td>
                        <td class="text-center">
                            <a href="{{ url('/Lists/view/').'/'.$seniorCitizen->id }}" class="btn btn-primary btn-sm">View</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
