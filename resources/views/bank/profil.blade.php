@extends('layout/layout')
@section('title', 'profil')
@section('content')
<section class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <center>  <h2>
                                Mes informations
                                <small>Vous pouvez les modifier dans le menu editer </small>
                            </h2>
                            </center>
                        </div>
                        <div class="">
                            <table id="" class="table table-striped">
                                <thead>
                                    <tr>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6" > Numéro de compte :</th>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-danger" > {{$compte}}</th>
                                       
                                        
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6">   Nom complet :</th>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-danger" >{{$nom}} {{$prenom}} 
                                        
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6" > Adresse domiciliaire :</th>
                                       <th class="text-danger col-lg-6 col-md-6 col-sm-6 col-xs-6">{{$adresse}}</th>
                                        
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> Téléphone :</th>
                                       <th class="text-danger col-lg-6 col-md-6 col-sm-6 col-xs-6">{{$telephone}}</th>
                                        
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> Adresse E-mail :</th>
                                       <th class="text-danger col-lg-6 col-md-6 col-sm-6 col-xs-6">{{$email}}</th>
                                        
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                       <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6" > Profession :</th>
                                       <th class="text-danger col-lg-6 col-md-6 col-sm-6 col-xs-6"> {{$profession}}</th>
                                        
                                    </tr>
                                </thead>                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection