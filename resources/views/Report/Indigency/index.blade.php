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

<div class="header">
  <h5>Republic of the Philippines</h5>
  <h5>Province of Southern Leyte</h5>
  <h5>Municipality of Bontoc</h5>
  <h5>Barangay of San Ramon</h5><br>
  <h5>OFFICE OF THE PUNONG BARANGAY</h5>
  <hr>

  <!-- Add image tag here -->
  <img class="img-profile rounded-circle" src="{{ asset('auth/img/admin1.jpg') }}" style="width: 74px; margin-right: 550px; margin-top: -302px; margin-left: 157px;">
</div>
         <section class="content">
                <div class="col-md-12">
                  <h2 style="TEXT-ALIGN: center;">CERTIFICATE OF INDIGENCY</h2>
                  <h5 style="text-align: justify; margin-inline: 200px; margin-top: 40px; font-size: x-large;">TO WHOM IT MAY CONCERN:</h5>
                  <h6 style="text-align: justify; margin-inline: 255px; font-size: x-large; margin-top: 70px;">THIS IS TO CERTIFY that _______________, of legal age,  a<br> bonafide  resident of _______________of_____________________ has been found as one of<br> the indigents of the said barangay.</h6><br>
                  <h6 style="text-align: justify; margin-inline: 255px; font-size: x-large;">THIS CERTIFIES FURTHER that __________ has no real<br> property holdings and not engaged in any business.</h6><br>
                  <h6 style="text-align: justify; margin-inline: 255px; font-size: x-large;">DONE this _____ day of __________ at ____________________,<br> ____________________.</h6>

                   </div>
           </section>
          <link rel="stylesheet" href="{{ asset('auth/css/print.css') }}" media="print">
                  <div style="">
                      <h6 style="text-decoration: underline; margin-left: 68%; margin-top: 5%;"> ERNESTO  E. TACARDON  JR.</h6>
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