<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" href="{{ asset('auth/img/admin1.png') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RBIIS | Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('auth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('auth/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="{{ asset('auth/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

 
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href=#>
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                 <img class="img-profile rounded-circle" src="{{ asset('auth/img/admin1.png')}}" style="width: 60px;">
                <div class="sidebar-brand-text mx-3">RBIIS </div>
            </a>
               
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                     <i class="fas fa-id-card fa-2x text-gray-300"></i> 
                    <span>Resident Profile</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <h6 class="collapse-header">Residents:</h6>
                        <a class="collapse-item" href="{{ route('residentprofile.add') }}" >Add</a>
                        <a class="collapse-item" href="{{ route('residentprofile.list') }}">Lists</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                     <i class="fas fa-chart-bar fa-2x text-gray-300"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-3 collapse-inner rounded">
                        <h6 class="collapse-header">Barangay Reports:</h6>
                        <a class="collapse-item" href="{{ route('population.save') }}">Population</a>
                        <a class="collapse-item" href="{{ route('populationbyage.save') }}">Population by Age</a>
                        <a class="collapse-item" href="{{ route('senior.save') }}">Senior Citizen</a>
<!--                         <a class="collapse-item" href="">PWD</a>
 --><!--                         <a class="collapse-item" href="{{ route('certificateofindigency.save') }}">Certificate of Indigency</a>
 -->                        <a class="collapse-item" href="{{ route('PWD.save') }}">PWD</a>
                        <a class="collapse-item" href="{{ route('OFW.save') }}">Overseas Filipino Worker</a>
                        <a class="collapse-item" href="{{ route('soloparent.save') }}">Solo Parent</a>
                        <a class="collapse-item" href="{{ route('Unemployed.save') }}">Unemployed</a>
                        <a class="collapse-item" href="{{ route('ChildrensOutofSchool.save') }}">Children's Out of School</a>
                        <a class="collapse-item" href="{{ route('HouseholdSurvey.save') }}">Household Survey</a>
                        <a class="collapse-item" href="{{ route('MonitoringReport.save') }}">Monitoring Report</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('records.residentprofile.list') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Household Records</span></a>
            </li>

             
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-2  static-top shadows ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-10">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                   
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src= "{{ asset('auth/img/admin.png')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                        
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout.perform')}}" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

        </div>
        <!-- End of Content Wrapper -->

             @yield('content')
    </div>

</div>

       
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('auth/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('auth/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('auth/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('auth/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('auth/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('auth/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('auth/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('auth/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('auth/js/demo/datatables-demo.js') }}"></script>



<!-- <script>
=======
    <script src="{{ asset('auth/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('auth/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{asset('auth/js/demo/datatables-demo.js') }}"></script>
<<<<<<< HEAD
    <script type="text/javascript">
        $.ajax({
            method:'GET',
            url:'',
            success: function(response) {
                
            }
        })
    </script>
=======
<script>
>>>>>>> 7fbcd5b33e7e657161d421ec3cb433db2a2b7a1d
    $(document).ready(function() {
        $.ajax({
            url: '/reports/PopulationByAge',
            method: 'GET',
            success: function(response) {
                // Handle the response and update your HTML elements
            },
            error: function(xhr, status, error) {
                // Handle errors
            }
        });
    });
</script>
 -->






</body>
</html>