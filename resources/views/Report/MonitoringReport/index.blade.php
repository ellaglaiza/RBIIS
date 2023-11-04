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
  padding: -0.25rem;
}

  table td, .table th {
  padding: -0.25rem;
  vertical-align: top;
  border-top: 1px solid #e3e6f0;
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
  <h6>Monitoring Report</h6>

  <!-- Add image tag here -->
  <img class="img-profile rounded-circle" src="{{ asset('auth/img/admin1.jpg') }}" style="width: 84px; margin-right: 550px; margin-top: -415px; margin-left: 157px;">
<!-- 
  <h5>Region: VIII</h5>
  <h5>Province: Southern Leyte</h5>
  <h5>City/Municipality: Bontoc</h5>
  <h5>Barangay: San Ramon</h5>
  <h5>Total No. of Inhabitants: </h5>
  <h5>Total No. of Household: </h5>
  <h5>Total No. of Families</h5>
 -->
</div>
        <section class="content">
    <div class="col-md-12">
        <p style=""></p>
        <table id="example1" class="table table-hover">
            <thead>
                  <tr>
                    <td>Indicators</td>
                    <td>Male</td>
                    <td>Female</td>
                    <td>Total</td>
                    <td>Remarks</td>
                </tr>
                <tr>
                  <td>Children 0-5 years old</td>
                  <td>{{ $total_male}}</td>
                  <td>{{ $total_female }}</td>
                  <td>{{ $total_population}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Children 6-12 years old</td>
                  <td>{{ $total_male_sixyrs}}</td>
                  <td>{{ $total_female_sixyrs }}</td>
                  <td>{{ $total_population_sixyrs}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Children 13-17 years old</td>
                  <td>{{ $total_male_13yrs}}</td>
                  <td>{{ $total_female_13yrs }}</td>
                  <td>{{ $total_population_13yrs}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Children 18-35 years old</td>
                  <td>{{ $total_male_18yrs}}</td>
                  <td>{{ $total_female_18yrs }}</td>
                  <td>{{ $total_population_18yrs}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Children 36-50 years old</td>
                  <td>{{ $total_male_36yrs}}</td>
                  <td>{{ $total_female_36yrs }}</td>
                  <td>{{ $total_population_36yrs}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Children 51-65 years old</td>
                  <td>{{ $total_male_51yrs}}</td>
                  <td>{{ $total_female_51yrs }}</td>
                  <td>{{ $total_population_51yrs}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Children 66 years old and above</td>
                  <td>{{ $total_male_66yrs}}</td>
                  <td>{{ $total_female_66yrs }}</td>
                  <td>{{ $total_population_66yrs}}</td>
                  <td></td>
                </tr>
                 <tr>
                    <td>Population by Sector</td>     
                </tr>
                <tr>
                  <td>Labor Force</td>
                  <td>{{ $total_male_unemployed}}</td>
                  <td>{{ $total_female_unemployed }}</td>
                  <td>{{ $total_population_unemployed}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Unemployed</td>
                  <td>{{ $total_male_unemployed}}</td>
                  <td>{{ $total_female_unemployed }}</td>
                  <td>{{ $total_population_unemployed}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Out of School Children(OSC)
                  15-24 yrs. old</td>
                  <td>{{ $total_male_osc}}</td>
                  <td>{{ $total_female_osc }}</td>
                  <td>{{ $total_population_osc}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Person with Dis-abilities</td>
                  <td>{{ $total_male_pwd}}</td>
                  <td>{{ $total_female_pwd }}</td>
                  <td>{{ $total_population_pwd }}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Overseas Filipino Workers</td>
                  <td>{{ $total_male_ofw}}</td>
                  <td>{{ $total_female_ofw }}</td>
                  <td>{{ $total_population_ofw}}</td>
                  <td></td>
                </tr>
                 <tr>
                  <td>Solo Parent</td>
                  <td>{{ $total_male_soloparent }}</td>
                  <td>{{ $total_female_soloparent }}</td>
                  <td>{{ $total_population_soloparent }}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Indigenous People</td>
                  <td>{{ $total_male_indigenous }}</td>
                  <td>{{ $total_female_indigenous }}</td>
                  <td>{{ $total_population_indigenous }}</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Civil Status:  Single</td>
                    <td>{{ $total_singleF }}</td>
                    <td>{{ $total_singleM }}</td>
                    <td>{{$total_population_S}}</td>
                    <td></td>
                  </tr>
                 <tr>
                    <td style="text-indent: 93px;">Married</td>
                    <td>{{ $total_marriedF }}</td>
                    <td>{{ $total_marriedM }}</td>
                    <td>{{$total_population_M}}</td>
                    <td></td>
                </tr>
                 <tr>
                    <td style="text-indent: 107px;">Separated</td>
                    <td>{{ $total_separatedF }}</td>   
                    <td>{{ $total_separatedM }}</td>
                    <td>{{$total_population_TS}}</td>
                    <td></td>
                </tr>
                 <tr>
                    <td style="text-indent: 87px;">Widow</td>
                    <td>{{ $total_widowM }}</td>
                    <td>{{ $total_widowF }}</td>
                    <td>{{$total_population_W}}</td>
                    <td></td>

                </tr>
                <tr>
                  <td>Citizenship: Filipino</td>
                  <td>{{ $total_male_filipino }}</td>
                  <td>{{ $total_female_filipino }}</td>
                  <td>{{ $total_population_filipino }}</td>
                  <td></td>
                </tr>
                  <tr>
                  <td style="text-indent: 93px;">Foreigner</td>
                  <td>{{ $total_male_foreigner }}</td>
                  <td>{{ $total_female_foreigner }}</td>
                  <td>{{ $total_population_foreigner }}</td>
                  <td></td>
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
                    <p style="  margin-bottom: -3%; margin-top: 5% ;margin-left:5%;">Submitted by:</p>
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
