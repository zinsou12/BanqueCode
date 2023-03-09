<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('public/admins/styles.css')}}" />
    <title>EFRGruppe admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>EFRGruppe</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{route('listes')}}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{route('crediter')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Crediter solde</a>
                <a href="{{route('tencour')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Transfert en cours</a>
                <a href="{{route('message')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Message</a>
                <a href="{{route('modify')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>modifier</a>
                <a href="{{route('logout')}}" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="content-wrapper">
        
        <section class="content-header">
          <h4>
            Administration
          </h4> <!-- Content Header (Page header)
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->

          <!-- Main row -->
          <div class="row">

                

          <section class="content-header">
          <h6 id="success">Modifier les informations</h6>
        </section>
       
        <!-- Main content -->
        <section class="content">
          
            <div class="box-header">
                    <h3 class="box-title">Modification pour l'utilisateur {{$nom}} {{$prenom}}</h3>
            </div>
            <form method="POST" action="{{route('tmodify', ['id'=>$id])}}" id="updateform">
            <div class="row">
            
              <div class="col-md-4">                
                      @csrf
                      
                    <div class="box box-danger">
                
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label>Nom*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="nom" value="{{$nom}}" class="form-control" id="nom"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Prenom*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="prenom" value="{{$prenom}}" class="form-control" id="prenom"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Email*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="email" name="email" value="{{$email}}" class="form-control" id="email"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>sexe*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="sexe" value="{{$sexe}}" class="form-control" id="sexe"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Date de naissance*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="date" value="{{$dateNaissance}}" class="form-control" id="date"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    
                    <div class="form-group">
                      <label>Telephone*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="telephone" value="{{$telephone}}" class="form-control" id="telephone"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Pays*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="pays" value="{{$pays}}" class="form-control" id="pays"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <div class="form-group">
                      <label>Ville*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="ville" value="{{$ville}}" class="form-control" id="ville"/>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                    <!-- phone mask -->
                    <div class="form-group">
                      <label>Montant Actuel (En Euro)*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="montant" value="{{$montant}}"  class="form-control" id="montant" />
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    <!-- phone mask -->
                    <div class="form-group">
                      <div class="input-group">
                        <button class="btn btn-block btn-primary btn-lg" name="modifier" id="modifier" type="submit">VALIDER</button>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->

                  </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label>Adresse*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="adresse" value="{{$adresse}}"  class="form-control" id="adresse" />
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    <div class="form-group">
                      <label>Login*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="login" value="{{$login}}"  class="form-control" id="login" />
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    <div class="form-group">
                      <label>devise*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="devise" value="{{$devise}}"  class="form-control" id="devise" />
                    </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>compte*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="compte" value="{{$compte}}"  class="form-control" id="compte" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>iban*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="iban" value="{{$iban}}"  class="form-control" id="iban" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>etape*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="etape" value="{{$etape}}"  class="form-control" id="etape" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>verif1*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="verif1" value="{{$verif1}}"  class="form-control" id="verif1" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>verif2*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="verif2" value="{{$verif2}}"  class="form-control" id="verif2" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>verif3*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="verif3" value="{{$verif3}}"  class="form-control" id="verif3" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->     

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label>verif4*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="verif4" value="{{$verif4}}"  class="form-control" id="verif4" />
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    <div class="form-group">
                      <label>verif5*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="verif5" value="{{$verif5}}"  class="form-control" id="verif5" />
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                    <div class="form-group">
                      <label>verif6*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="verif6" value="{{$verif6}}"  class="form-control" id="verif6" />
                    </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>verif7*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="verif7" value="{{$verif7}}"  class="form-control" id="verif7" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->
                <div class="form-group">
                      <label>Pourcentage*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="pourcentage" value="{{$pourcentage}}"  class="form-control" id="pourcentage" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->

                <div class="form-group">
                      <label>code de blocage*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="code" value="{{$code}}"  class="form-control" id="code" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->

                <div class="form-group">
                      <label>montant de blocage*:</label>
                      <div class="input-group">
                        <div class="input-group-addon">
                        </div>
                        <input type="text" name="debloquer" value="{{$debloquer}}"  class="form-control" id="debloquer" />
                      </div><!-- /.input group -->
                </div><!-- /.form group -->
                     

                </div>
                

    </div>       
            </form>
     
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>

</html>