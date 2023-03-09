<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>etape2</title>
    <!-- Favicon-->
    <link href="https://rinosfinancial.com/img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    @livewireStyles
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('bank/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('bank/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('bank/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('bank/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('bank/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('bank/css/themes/all-themes.css')}}" rel="stylesheet" />

 
</head>

<body class="theme-red" onload="progresse_bar('{{$pourcentage}}',49, 3000)">
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
                    <input type="hidden" id="base_url" value="{{config('app.url')}}">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count" id="countnotification"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu" id="liste_notification">
                                   
                                  
                                   
                                </ul>
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
                    <img src="{{asset('bank/images/user.png')}}" width="48" height="48" alt="User" />
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
                        <a href="#" >
                            <i class="material-icons">home</i>
                            <span >Accueil</span>
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
                                <a href="#" class="menu-toggl">
                                    <span>Profil</span>
                                </a>
                                
                            </li>
                            <li>
                                <a href="#" class="">
                                    <span>Editer profil</span>
                                </a>
                                
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="#">
                            <i class="material-icons">lock</i>
                            <span>Code et Securite</span>
                        </a>
                    </li>
                    <li>
                    <a href="#">
                            <i class="material-icons">credit_card</i>
                            <span>Carte Bancaire</span>
                        </a>
                    </li>
                     <li>
                    <a href="#">
                            <i class="material-icons">add</i>
                            <span>Approvisionnement</span>
                        </a>
                    </li>
                     <li>
                    <a href="#">
                            <i class="material-icons">transfer_within_a_station
</i>
                            <span>Viremen en ligne</span>
                        </a>
                    </li>
                    <li>
                    <a href="mailto:client@efrgruppe.de">
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
                <h2></h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
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
            </div>
            <!-- #END# Vertical Layout -->
            <!-- Vertical Layout | With Floating Label -->
            
        </div>

        <div class="row clearfix" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h6 class='text-center'>
                               Transfert en cour...
                            </h6>                         
                        </div>
                        <div class="body">
                        <div class="progress">
                            <div id="progress_bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" ></div>
                        </div>
                        <div id ="formulaire">@livewire('verifcode2')</div>                           
                        </div>
                    </div>
                </div>
            </div>
    
    
    </section>

@livewireScripts
<!-- Jquery Core Js -->
<script src="{{asset('bank/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('bank/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('bank/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('bank/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('bank/plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('bank/plugins/jquery-countto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{asset('bank/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('bank/plugins/morrisjs/morris.js')}}"></script>

<!-- ChartJs -->
<script src="{{asset('bank/plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{asset('bank/plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('bank/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('bank/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('bank/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('bank/plugins/flot-charts/jquery.flot.time.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('bank/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('bank/js/admin.js')}}"></script>
<script src="{{asset('bank/js/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('bank/js/demo.js')}}"></script>

<script src="{{asset('bank/js/etape.js')}}"></script>
<script src="{{asset('bank/js/countnotification.js')}}"></script>

</body>

</html>