 @extends('layouts.default')

@section('content')
<div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
      <div class="col-sm-6">
         <h1 class="m-0" style="border-radius: 100px;"></h1>
         </div>
            <div class="col-sm-6">
            </div>
         </div>
      </div>
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
                              <th>Poruk</th>
                              <th>Male</th>
                              <th>Female</th>
                              <th>Total Household</th>
                              <th>Total Population</th>
                             
                              <th class="text-center">Action</th>
                           </tr>

                        </thead>
                        <tbody>
                          @foreach($report as $Reports)
                           <tr>
                         
                              <td>{{$Report->purok}}</td>
                              <td>{{$Report->male}}</td>
                              <td>{{$Report->female}}</td>
                              <td>{{$Report->total_household}}</td>
                              <td>{{$Report->total_population}}</td>
                              <td class="text-center">
                               
                              </td>
                           </tr>
                           @endforeach
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
      
@endsection

            