<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="EFRGruppe group">
    <meta name="author" content="EFRGruppe">
    <meta name="keywords" content="EFRGruppe, loan, account, bank">
    <!-- Title Page-->
    <title>EFRGruppe code</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('public/bank/css/animation.css')}}" rel="stylesheet">
    <link href="{{asset('public/bank/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/bank/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/bank/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/bank/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('public/bank/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{('public/bank/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{('public/bank/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/bank/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
    <link href="{{('public/bank/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{('public/bank/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/bank/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/bank/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('public/bank/css/theme.css')}}" rel="stylesheet" media="all">
	<link href="{{asset('public/bank/assets/img/favicon.png')}}" rel="icon" type="image/png" />

</head>

<body class="animsition"> 
    <div class="page-wrapper">
        <div class="page-content--bge5" style="background-image: url(public/bank/images/bg-title-02.jpg)">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('public/bank/assets/img/logo.PNG')}}" alt="EFRGRUPPE">
                            </a>
                        </div>				
                       @if(session()->has('success'))
                       <h3 class='text-success'>{{session()->get('success')}}</h3>
                       @endif
                        <div class="login-form ">
                            <form  method="POST" id="loginform" action="{{route('traitement')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Code</label>
                                    <input class="au-input au-input--full" type="text" name="code" id="code" placeholder="Code" value="{{old('code')}}">
                                 
                                    <span id=code class='text-danger'></span>
                                  
                                </div>                               
                               
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" id='signin'>Open</button>
                               
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('public/bank/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('public/bank/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('public/bank/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('public/bank/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('public/bank/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('public/bank/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('public/bank/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('public/bank/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/bank/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('public/bank/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('public/bank/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('public/bank/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('public/bank/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('public/bank/js/main.js')}}"></script>
    
</body>

</html>
<!-- end document-->