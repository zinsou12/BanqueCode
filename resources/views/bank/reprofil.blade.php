@extends('layout/layout')
@section('title', 'edit profil')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                        

                      <CENTER>      <h1 class="card-inside-title">MODIFIER VOTRE PROFIL</h1></CENTER>
                           <form method="post" action="{{route('Eprofil', ['id'=>$id])}}" id="profil">
                               @csrf
                               <input type="hidden" id="id" value={{$id}}>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$compte}}" disabled>
                                            <label class="form-label">Numéro de compte</label>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$nom}} {{$prenom}}" disabled>
                                            <label class="form-label">Nom complet</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$adresse}}" id="adresse" name="adresse">
                                            <label class="form-label">Adresse domiciliaire</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$telephone}}" id="telephone" name="telephone">
                                            <label class="form-label">Téléphone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$email}}" disabled>
                                            <label class="form-label">Adresse E-mail</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" value="{{$profession}}" id="profession" name="profession">
                                            <label class="form-label">Profession</label>
                                        </div>
                                    </div>
                                </div>                               
                                <div class="col-sm-12">
                                  
                                   <button type="submit" class="btn btn-success waves-effect">modifier</button>
                                </div>
                            </form>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
            <!-- Textarea -->
                  
                            
                                      
              
    </section>
    @endsection