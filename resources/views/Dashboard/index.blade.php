@extends('layouts.default')

@section('content')

 <style type="text/css">
     .card-column {
    flex: 0 0 calc(25% - 1rem); /* Adjust width as needed */
    margin-bottom: 1rem;
}

.card {
    border-left: 6px solid #ff69b4; /* Adjust color */
}

.card-success {
    border-left-color: #28a745; /* Specific color for success */
}

.card-body {
    padding: 1.25rem;
}

.card-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.content-info {
    flex: 1;
}

.info-title {
    font-size: 0.75rem;
    font-weight: bold;
    text-transform: uppercase;
    color: #28a745; /* Adjust color */
}

.icon {
    flex: 0 0 auto;
    font-size: 2rem;
    color: #ccc; /* Adjust color */
}

 </style>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: -500px; " >
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="" class=""><i
                                class=""></i></a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                         <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card bg-primary text-white shadow " style="height: 141px;
    width: 237px;">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col">
                                                    <div class=" font-weight-bold text-uppercase mb-1" style="font-size: 13px; ">
                                                        Total Population
                                                    </div>
                                                    <div class="h2 mb-0 font-weight-bold">{{ $total_population }}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-users fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
       <div class="col-xl-3 col-md-6 mb-4">
    <div class="card shadow h-100 py-2" style="background-color: #5a5c69; height: 141px;
    width: 237px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success  mb-1" style="font-size: 15px; ">Total Number of Families</div>
                    <div class="h5 mb-0 font-weight-bold" style="font-size: 30px; color: #2ac034;">{{ $sum }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users  fa-3x" style="color: #2ac034;"></i>
                </div>
            </div>
        </div>
    </div>
</div>

                     <div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow h-100 py-1" style=" width: 237px; background-color: #1cc8c7">
        <div class="card-body" style="  color: black;">
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <div class="text-xs font-weight-bold mb-1" style="font-size: 15px;  ">Total Number of Household</div>
                    <div class="h4 mb-0 font-weight-bold " style="font-size: 25px; ">{{ $total_HouseholdNo }}</div>
                   
                </div>
                <div class="col-auto">
                    <i class="fas fa-home fa-3x " style="color: #c81c1c"></i>
                </div>
            </div>
        </div>
    </div>
</div>
        <a href="{{route('dashboard.soloparent')}}">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card   py-1" style="background-color: #f6c23ecc; border-radius: 10px; color: #c43ef6f7; height: 141px;  width: 214px;" >
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-3 " style="color: #3e72f6">
                                <div class="text-sm font-weight-bold  mb-1" style="color: #3e72f6" >Solo Parent</div>
                                <div class="h4 font-weight-bold ">{{ $total_population_soloparent }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-friends fa-3x " style="color: #3e72f6" ></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{route('dashboard.pwd')}}">
            <div class="col-xl-3 col-md-6 mb-4">
            <div class="card  shadow  py-1" style="background-color: #22a4be80;  height: 141px;
            width: 237px; " >
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-3">
                            <div class="text-sm font-weight-bold  text-uppercase mb-1" style="color: #bd00ff">Persons with Disabilities (PWD)</div>
                            <div class="h4 font-weight-bold text-gray-800">{{ $total_population_pwd }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wheelchair fa-3x " style="color: #bb1eb4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a href="{{route('dashboard.seniorcitizen')}}">
      <div class="col-xl-3 col-md-6 mb-4" style="margin-left: -15px;">
        <div class="card  shadow  py-3" style="background-color: #beb522;   height: 141px; width: 237px; margin-left: -4px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-3">
                    <div class="text-sm font-weight-bold mb-1" style="color: #3a3b45; font-size: 17px">Senior Citizen</div>
                    <div class="h4 font-weight-bold " style="color: #3a3b45; font-size: 31px; color: #3a3b45">{{$total_population_senior}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user-clock fa-3x " style="color: #3a3b45; font-size: 47px;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</a>
    <a href="{{route ('dashboard.OFW') }}">
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card  shadow  py-1" style="background-color: #fff;  height: 141px;
    width: 237px; background-color: #ff8a65; margin-left: -19px;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-3">
                    <div class="text-sm font-weight-bold  mb-1" style=" color: black;">Overseas Filipino Workers (OFW)</div>
                    <div class="h4 font-weight-bold " style="  color: black;">{{ $total_population_ofw }}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-plane fa-3x " style="  color: black;"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</a>
<a href="{{route('dashboard.deceased')}}">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow py-1" style="background-color: #fff; height: 141px; width: 219px; background-color: #64b5f6; margin-left: -20px;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-3">
                        <div class="text-sm font-weight-bold mb-1" style="color: #e53935;">Deceased</div>
                        <div class="h4 font-weight-bold" style="color: #e53935;">{{ $total_population_deceased }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-user fa-3x" style="color: #e53935;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>

</div>
@endsection