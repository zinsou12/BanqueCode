@extends('layout/layout')
@section('title', 'Security')
@section('content')

    
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2></h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h6>
                                Code d'accès : Votre code d’accès est confidentiel. Ne le communiquer à personne. Aussi, nous ne vous le demanderons jamais. Pour plus de sécurité, nous vous conseillons de modifier votre code d'accès très souvent.
                            </h6>
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
                            <form method="post" action="{{route('password', ['id'=>$id])}}">
                                @csrf
                                @if(session('success'))
                                <label for="text" class="alert alert-success">{{session('success')}}</label>
                                @endif
</br>
                                <label for="text">Mot de passe actuel</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="mdpactuel" name="mdpactuel" class="form-control" placeholder="Code d'accès actuel">
                                        @error('mdpactuel')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="text">Nouveau mot de passe</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="mdpnouveau" name="mdpnouveau" class="form-control" placeholder="Nouveau code d'accès">
                                        @error('mdpnouveau')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <label for="password">Confirmer nouveau mot de passe</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="mdpnouveau_confirmation" name="mdpnouveau_confirmation" class="form-control" placeholder="Enter your password">
                                        @error('mdpnouveau_confirmation')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    
                                    </div>
                                </div>

                                
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            <!-- Vertical Layout | With Floating Label -->
            
        </div></section>

        @endsection