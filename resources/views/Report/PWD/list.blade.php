@extends('layouts.default')
@section('content')
  

   <style type="text/css">
   .btn{
   }
   tr{
      text-align: center;
  border: 1px solid black ;

   }
   .card{
    margin-bottom: 60px;
   }
   #print-button {
    display: block;
    width: 158px;
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
  border: 1px solid ;
  margin-top: 20px;
}

th, td, tr {
  border: 1px solid black;
  padding: 8px;
}

th {
  background-color: transparent;
}

tr:nth-child(even) {
  background-color: transparent;
}

</style>


<div class="header">
  <h5>Republic of the Philippines</h5>
  <h5>Province of Southern Leyte</h5>
  <h5>Municipality of Bontoc</h5>
  <h5><strong>Barangay of San Ramon</strong></h5><br>
  <h5>OFFICE OF THE PUNONG BARANGAY</h5>
  <hr>


  <!-- Add image tag here -->
  <img class="img-profile rounded-circle" src="{{ asset('auth/img/admin1.png') }}" style="width: 84px; margin-right: 550px; margin-top: -302px; margin-left: 157px;">
</div>
         <section class="content">
                <div class="col-md-12">
                  <p style="margin-top: -40px;">List of Persons with Dis-abilities</p>
                    <table id="example1" class="" style="width: -webkit-fill-available;">
                     <thead>
                                    <tr>
                                        <th>Lastname</th>
                                        <th>Middlename</th>
                                        <th>Firstname</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($PWD as $person)
                                    <tr>
                                        <td>{{ $person->lastname }}</td>
                                        <td>{{ $person->middlename }}</td>
                                        <td>{{ $person->firstname }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                  </table>
                   </div>
           </section>
          <link rel="stylesheet" href="{{ asset('auth/css/print.css') }}" media="print">
                  <div style="">
                      <h6 style="text-decoration: underline; margin-left: 71%; margin-top: 5%;"> <strong>RENE T. FUSTANES </strong></h6>
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