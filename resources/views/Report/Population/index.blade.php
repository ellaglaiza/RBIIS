@extends('layouts.default')

@section('content')
  
 <style type="text/css">
   .btn{
   }
   tr{
      text-align: center;
   }
   .card{
    margin-bottom: 60px;
   }
   #print-button {
    display: block;
    width: 100px;
    margin-left: 40%;
    
}
@media print {
    #print-button {
    display: none;
    }
}

/* Custom CSS for the header */
.header {
  text-align: center;
  margin-bottom: 20px;
  margin-top: 28px;
}

.header h5, .header h5 {
  margin: 0;
  text-align: center;

}

/* Custom CSS for the table */
.table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #ddd;
  margin-top: 20px;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<div class="header" style="font-size: 12px;">
  <h5>Republic of the Philippines</h5>
  <h5>Province of Southern Leyte</h5>
  <h5>Municipality of Bontoc</h5>
  <h5><strong>Barangay of San Ramon</strong></h5><br>
  <h5>OFFICE OF THE PUNONG BARANGAY</h5>
  <hr>

<td>

    <a style="margin-left: 878px; padding: 5px;" id="print-button" href="{{ route('list.residentprofile.list') }}" class="btn btn-primary btn-sm">Resident Lists</a>                         
</td>
  <!-- Add image tag here -->
  <img class="img-profile rounded-circle" src="{{ asset('auth/img/admin1.png') }}" style="width: 84px; margin-right: 550px; margin-top: -302px; margin-left: 157px;">
</div>
         <section class="content">
                <div class="col-md-12">
                  <p style="margin-top: -40px;">POPULATION</p>
                    <table id="example1" class="table table-hover">
                     <thead>
                        <tr>
                           <th>Purok</th>
                           <th>Male</th>
                           <th>Female</th>
                           <th>Total Population by Purok</th>
                        </tr>
                     </thead>
                     <tbody>
                        @for($x=0;$x < count($reports);$x++)
                        <tr>
                           <td>{{ $reports[$x]['purok_name'] }}</td>
                           <td>{{ $reports[$x]['total_male'] }}</td>
                           <td>{{ $reports[$x]['total_female'] }}</td>
                           <td>{{ $reports[$x]['total_household'] }}</td>
                        </tr>
                        @endfor
                     </tbody>
                  </table>
                   </div>
           </section>
          <link rel="stylesheet" href="{{ asset('auth/css/print.css') }}" media="print">
                  <div style="">
                      <h6 style="text-decoration: underline; margin-left: 71%; margin-top: 5%;">RENE T. FUSTANES</h6>
                      <h6 style="margin-left: 72%;  ">Punong Barangay</h6>
                     
                  </div>
   <script>
       document.getElementById('print-button').addEventListener('click', function () {
           var printContents = document.getElementById('table-container').innerHTML;
           var originalContents = document.body.innerHTML;

           document.body.innerHTML = printContents;

           window.print();

           document.body.innerHTML = originalContents;
       });
   </script>
          <button id="print-button" onclick="window.print()" class="btn btn-sm btn-primary waves-effect waves-light printdtr"><i class="fa fa-print"></i></button>
       </div>
@endsection
