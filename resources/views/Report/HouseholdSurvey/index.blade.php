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

<div class="header" style="margin-top: 5%;">
  <h5>Republic of the Philippines</h5>
  <h5>Province of Southern Leyte</h5>
  <h5>Municipality of Bontoc</h5>
  <h5>Barangay of San Ramon</h5><br>
  <h5>OFFICE OF THE PUNONG BARANGAY</h5>
  <hr>
  <h6>HOUSEHOLD SURVEY AS OF 2023</h6>

  <!-- Add image tag here -->
  <img class="img-profile rounded-circle" src="{{ asset('auth/img/admin1.jpg') }}" style="width: 74px; margin-right: 550px; margin-top: -302px; margin-left: 157px;">
</div>
        <section class="content">
    <div class="col-md-12">
        <p style=""></p>
        <table id="example1" class="table table-hover">
            <thead>
                  <tr>
                    <td>Total Number of Household</td>
                    <td>{{ $total_HouseholdNo }}</td>
                </tr>
                  <tr>
                    <td>Number of Families</td>
                    <td>{{ $sum }}</td>
                </tr>
               <tr>
                    <td>Total Population</td>
                    <td>{{ $total_population }}</td>
                </tr>
            <tbody>
                <tr>
                    <td>Male</td>
                    <td>{{ $total_male }}</td>
                </tr>
                <tr>
                    <td>Female</td>
                    <td>{{ $total_female }}</td>
                </tr>
                  <tr>
                    <td>Household with Toilets</td>
                    <td>{{ $total_withToilets }}</td>
                </tr>
                  <tr>
                    <td>Household without Toilets</td>
                    <td>{{ $total_withoutToilets }}</td>
                </tr>
                 <tr>
                    <td>Total PWD</td>
                    <td>{{ $total_population_pwd }}</td>
                </tr>
                 <tbody>
                <tr>
                    <td>Male</td>
                    <td>{{ $total_male_pwd }}</td>
                </tr>
                <tr>
                    <td>Female</td>
                    <td>{{ $total_female_pwd }}</td>
                </tr>
                 <tr>
                    <td>Total Senior Citizen</td>
                    <td>{{ $total_population_senior}}</td>
                </tr>
                 <tbody>
                <tr>
                    <td>Male</td>
                    <td>{{ $total_male_senior }}</td>
                </tr>
                <tr>
                    <td>Female</td>
                    <td>{{ $total_female_senior }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

          <link rel="stylesheet" href="{{ asset('auth/css/print.css') }}" media="print">
                  <div class= "header2">
                    <p style=" margin-left: 79%; margin-bottom: -3%; margin-top: 5%;">Prepared by:</p>
                      <h6 style="text-decoration: underline; margin-left: 79%; margin-top: 5%;"> ROWELYN L. QUIJANO</h6>
                      <h6 style="margin-left: 81%;  ">Barangay Secretary</h6>
                     
                  </div>
                   <div class= "header3">
                    <p style="  margin-bottom: -3%; margin-top: 5% ;margin-left:5%;">Noted:</p>
                      <h6 style="text-decoration: underline;  margin-top: 5%; margin-left: 10% "> ERNESTO E. TACARDON</h6>
                      <h6 style="margin-left: 13%;  ">Punong Barangay</h6>
                     
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
