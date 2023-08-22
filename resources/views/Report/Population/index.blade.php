 @extends('layouts.default')

@section('content')
<style type="text/css">
   .btn{
    /*  float: right;*/
   }
   tr{
      text-align: center;
   }
</style>
<!-- <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         </div>
            <div class="col-sm-6">
            </div>
         </div>
      </div> -->
      <div class="row card p-">
      <div class="card-header">
       
      <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <br>
                  <div class="col-md-12">
                     <table id="example1" class="table table-hover">

  <thead>

    <tr>
      <th colspan="1"> Purok</th>
      <th colspan="1">Male</th>
      <th colspan="1">Female</th>
      <th colspan="1">Total Population</th>
      <th colspan="1">Total Household</th>

    </tr>
  </thead>

  <tbody>
    <tr>
      <td>Camia</td>
      <td>22</td>
       <td>33</td>
      <td>555</td>
      <td>222</td>
    </tr>
    <tr>
      <td>Santan</td>
      <td>Profit</td>
      <td>Sales</td>
      <td>Profit</td>
      <td>222</td>
    </tr>
    <tr>
      <td>Adelfa</td>
      <td>Profit</td>
      <td>Sales</td>
      <td>Profit</td>
        <td>$50,00</td>
    </tr>
    <tr>
      <td>Bouganvillia</td>
      <td>Profit</td>
        <td>$50,00</td>
        <td>Sales</td>
      <td>Profit</td>
    </tr>
    <tr>
      <td>Sales</td>
      <td>Profit</td>
      <td>Sales</td>
        <td>$50,00</td>
      <td>Profit</td>
    </tr>
   
     
  </tbody>
          
                     </table>
                  </div>
               </div>
            </div>
         </section>
               </center>
            </div>
      </div>  
</div>
<div class="text-center">
  <button onclick="window.print()" class="btn btn-primary" >Print</button>
</div>
      
@endsection

            