<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>compte bloqué</title>
    <!-- Favicon-->
    <link href="https://rinosfinancial.com/public/img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
   
    <!-- Bootstrap Core Css -->
    <link href="{{asset('public/bank/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('public/bank/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('public/bank/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('public/bank/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('public/bank/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('public/bank/css/themes/all-themes.css')}}" rel="stylesheet" />

  
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{route('account')}}">RINOS FINANCIAL BANK</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">{{Auth::user()->unreadNotifications->count()}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                   
                                   @foreach(Auth::user()->unreadNotifications as $notifications)
                                    <li>
                                        <a href="{{route('read', ['id'=>$notifications->id])}}">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b></b>{{$notifications->data['message']}}</h4>
                                               
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                   
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('public/bank/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">cliente name</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    
                    <li class="active">
                        <a href="">
                            <i class="material-icons">home</i>
                            <span>Accueil</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">text_fields</i>
                            <span>Typography</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Helper Classes</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Profil</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="" class="menu-toggl">
                                    <span>Profil</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="" class="">
                                    <span>Editer profil</span>
                                </a>
                                
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="">
                            <i class="material-icons">lock</i>
                            <span>Code et Securite</span>
                        </a>
                    </li>
                    <li>
                    <a href="">
                            <i class="material-icons">credit_card</i>
                            <span>Carte Bancaire</span>
                        </a>
                    </li>
                     <li>
                    <a href="">
                            <i class="material-icons">add</i>
                            <span>Approvisionnement</span>
                        </a>
                    </li>
                     <li>
                    <a href="">
                            <i class="material-icons">transfer_within_a_station
</i>
                            <span>Viremen en ligne</span>
                        </a>
                    </li>
                    <li>
                    <a href="mailto:contact@rinosfinancial.com">
                            <i class="material-icons">mail
</i>
                            <span>Service Client</span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{route('logout')}}">
                            @csrf                          
                            
                            <button type="submit"><i class="material-icons">exit_to_app</i>Déconnexion</button>
                        </form>                    
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <marquee> <h2 class='alert alert-danger'>COMPTE BLOQUE. Vous n'êtes plus en mesure d'effectué un transfert</h2></marquee>
            </div>
<div class="row clearfix">
                <!-- Visitors -->
                
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        
                        <div class="content">
                            <span>Numéro de compte : {{$compte}}</span><br></br>
                            <span>Titulaire du compte : {{$nom}} {{$prenom}}</span>
                        </div>
                    </div>
                </div>

               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        
                        <div class="content">
                        <span> Adresse domiciliaire: {{$adresse}}</span></br><br>
                        
                        <span> Téléphone : {{$telephone}}</span>
                        </div>
                    </div>
                </div>
               
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FRAIS DE DEBLOCAGE
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                       <marque> <th class='text-danger alert alert-danger block-header'>MONTANT DE DEBLOCAGE:   {{$debloquer}}</th></marque>
                                        
                                    </tr>
                                </thead>
                                

                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_balance_wallet
</i>
                        </div>
                        <div class="content">
                            <div class="text-center">SOLDE</div><br>
                            <div>{{$devise}} {{$montant}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">transfer_within_a_station

</i>
                        </div>
                        <div class="content">
                            <div class="text">TRANSFERT</div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">TYPE DE COMPTE</div>
                            <div  data-from="0" data-to="epagne" data-speed="1000" data-fresh-interval="20">Epagne</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL TRANSACTION</div>
                            <div  data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">{{$total}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>CPU USAGE (%)</h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    <div class="switch panel-switch-btn">
                                        <span class="m-r-10 font-12">REAL TIME</span>
                                        <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                                    </div>
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="real_time_chart" class="dashboard-flot-chart"></div>
                        </div>
                    </div>
                    
                </div>

            </div>
            
    </section>
    
    <!-- Jquery Core Js -->
    <script src="{{asset('public/bank/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('public/bank/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{asset('public/bank/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('public/bank/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('public/bank/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{asset('public/bank/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{asset('public/bank/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('public/bank/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{asset('public/bank/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{asset('public/bank/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('public/bank/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('public/bank/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('public/bank/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('public/bank/plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{asset('public/bank/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('public/bank/js/admin.js')}}"></script>
    <script src="{{asset('public/bank/js/pages/index.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('public/bank/js/demo.js')}}"></script>

    
    
</body>

</html>