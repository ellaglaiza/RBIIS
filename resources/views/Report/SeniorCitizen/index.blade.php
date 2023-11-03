@extends('layouts.default')

@section('content')
   <link rel="stylesheet" href="{{ asset('auth/css/print.css') }}" media="print">
   <button id="print-button" onclick="window.print()" class="btn btn-sm btn-primary waves-effect waves-light printdtr"><i class="fa fa-print"></i></button>

   <script>
       document.getElementById('print-button').addEventListener('click', function () {
           var printContents = document.getElementById('table-container').innerHTML;
           var originalContents = document.body.innerHTML;

           document.body.innerHTML = printContents;

           window.print();

           document.body.innerHTML = originalContents;
       });
   </script>

   <style type="text/css">
       .btn {
       }

       tr {
           text-align: center;
       }

       .card {
           margin-bottom: 100px;
       }

       #print-button {
           display: block;

       }

       @media print {
           #print-button {
               display: none;
           }
       }
   </style>

   <div class="row card p-">
       <div class="card-header">

           <section class="content">
               <div class="container-fluid">
                   <div class="card card-info">
                       <br>
                       <div class="col-md-12">
                           <table id="example1" class="table table-hover">
                               <div id="table-container">
                                   <thead>
                                   <tr>
<<<<<<< HEAD
                                       <th>Population By Age</th>
=======
                                       <th>Senior Citizen By Purok</th>
>>>>>>> 75d72e283339b3e7eef427576aa04b7116e590a9
                                       <th>Male</th>
                                       <th>Female</th>
                                       <th>Total Population</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                     <tbody>
<<<<<<< HEAD
      @for($x=0;$x < count($reports);$x++)
      <tr>
        <th>{{ $reports[$x]['populationby_age'] }}</th>
        <th>{{ $reports[$x]['total_male'] }}</th>
        <th>{{ $reports[$x]['total_female'] }}</th>
        <th>{{ $reports[$x]['total_population'] }}</th>
      </tr>
      @endfor
    </tbody>
                                 
=======
                                     @for($x=0;$x < count($reports);$x++)
                                       <tr>
                                         <th>{{ $reports[$x]['purok_name'] }}</th>
                                            <th>{{ $reports[$x]['total_male'] }}</th>
                                            <th>{{ $reports[$x]['total_female'] }}</th>
                                               <th>{{ $reports[$x]['total_population'] }}</th>
                                                </tr>
                                              @endfor
                                             </tbody>                                
>>>>>>> 75d72e283339b3e7eef427576aa04b7116e590a9
                                   </tbody>
                               </div>
                           </table>
                       </div>
                   </div>
               </div>
           </section>
       </div>
   </div>
@endsection
