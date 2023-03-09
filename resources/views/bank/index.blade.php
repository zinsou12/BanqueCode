@extends('layout/layout')

@section('title', 'account')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <marquee> <h2>BANQUE EN LIGNE</h2></marquee>
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
                                Trasaction Finanliser
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Réf.</th>
                                        <th>Date</th>
                                        <th>Débit</th>
                                        <th>Crédit</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                     <th scope="row">tr</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>576689687</td>
                                    </tr>
                                     <tr>
                                </tbody>

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
                            <div class="text-center">SOLDE</div></br>
                            <div>{{$devise}} {{number_format("55000000", NULL, '', ' ,')}}</div>
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
@endsection