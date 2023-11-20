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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="margin-top: -520px; " >
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="" class=""><i
                                class=""></i></a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                         <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card bg-primary text-white shadow h-100">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col">
                                                    <div class=" font-weight-bold text-uppercase mb-1" style="font-size: 13px; ">
                                                        Total Population
                                                    </div>
                                                    <div class="h2 mb-0 font-weight-bold">{{ $totalPopulation }}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-users fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body" >
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Number of Families 
                                                        </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sum }}</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa-light fa-family fa-lg" style="color: #2ac034;"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Number of Household
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $total_HouseholdNo }}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                              Solo Parent </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_population_soloparent }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">PWD
                                              </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_population_pwd }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Senior Citizen </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_population_senior}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                              OFW </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_population_ofw}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                 
                    </div>
                  
                    
                    
                    <!-- Content Row -->

@endsection