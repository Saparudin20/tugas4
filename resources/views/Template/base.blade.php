<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>KETAPANG PUNYE</title>

    <!-- Fontfaces CSS-->
    <link href="{{ URL :: asset ('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ URL :: asset ('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->

    <link href="{{ URL :: asset ('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ URL :: asset ('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <link rel="stylesheet" href="{{ URL :: asset ('plugins/datatables/css/dataTables.bootstrap4.min.js')}}"></script>
    <link rel="stylesheet" href="{{ URL :: asset ('plugins/datatables-responsive/css/responsive.bootstrap4.min.js')}}"></script>
    <!-- Main CSS-->
    <link href="{{ URL :: asset ('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        @include('Template.section.sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('Template.section.header')
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @include('Template.utils.notif')
                        </div>
                    </div>
                </div>
            @yield('content')
            </div>
            </div>
        </div>
            <!-- FOOTER MAIN CONTENT-->
            @include ('Template.section.footer')
            <!-- END FOOTER MAIN CONTENT-->
     
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
         </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ URL :: asset ('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->


    <script src="{{ URL :: asset ('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{ URL :: asset ('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{ URL :: asset ('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{ URL :: asset ('vendor/wow/wow.min.js')}}"></script>
    <script src="{{ URL :: asset ('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{ URL :: asset ('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{ URL :: asset ('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{ URL :: asset ('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{ URL :: asset ('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{ URL :: asset ('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ URL :: asset ('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{ URL :: asset ('vendor/select2/select2.min.js')}}">
    </script>

    <script src="{{ URL :: asset ('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL :: asset ('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>  
    <script src="{{ URL :: asset ('plugins/datatables-responsive/js/dataTables.respomsive.min.js')}}"></script>
    <script src="{{ URL :: asset ('plugins/datatables-responsive/js/respomsive.bootstrap4.min.js')}}"></script>    
    <!-- Main JS-->
    <script src="{{ URL :: asset ('js/main.js')}}"></script>

    <script>
        $(".table-datatable").dataTable();
    </script>

</body>

</html>
<!-- end document-->
