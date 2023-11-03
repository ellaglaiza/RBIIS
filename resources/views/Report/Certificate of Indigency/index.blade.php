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
          <form method="POST" action="{{ route('indigency.save')}}" enctype="multipart/form-data">
                    @csrf
                    <button>View Certificate</button>
                </form>
                <div class="col-md-12" style="  margin-top: 15px;">
                        <div class="column">
                           <div class="col-md-4">
                              <div class="form-group">
                                <label style="font-family: emoji; font-weight: 500;">Full Name:</label>
                                 <input type="text" name="firstname"  class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Address:</label>
                                 <input type="text" name="middlename"  class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Courtesy Titles: </label>
                                 <input type="text" name="lastname" class="form-control" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label style="font-family: emoji; font-weight: 500;">Issued on: </label>
                                 <input type="text" name="lastname" class="form-control" >
                              </div>
                           </div>

                           <div class="col-md-5">
                  <button type="submit" class="btn btn-primary" style="background-color: black; margin-top: 10px;">Save</button>
               </div>

           </section>
          <link rel="stylesheet" href="{{ asset('auth/css/print.css') }}" media="print">
                
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