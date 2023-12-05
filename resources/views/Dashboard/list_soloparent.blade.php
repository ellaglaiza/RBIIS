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
        <h3 class="m-0 font-weight-bold text-primary">List of Solo Parent Records</h3>
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
                    @foreach($soloparentRecords as $soloparent)
                    <tr>
                        <td>{{$soloparent->firstname}}</td>
                        <td>{{$soloparent->middlename}}</td>
                        <td>{{$soloparent->lastname}}</td>
                        <td>{{$soloparent->suffix}}</td>
                        <td>{{$soloparent->age}}</td>
                        <td>{{$soloparent->sex}}</td>
                        <td>{{$soloparent->purok}}</td>

                        <td class="text-center">
                        <a href="{{ url('/Lists/view/').'/'.$soloparent->id}}" class="btn btn-primary btn-sm">View</a>
                                                     </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
