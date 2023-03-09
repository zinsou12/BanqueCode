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
          <h6 id="success">Envoie de message</h6>
        </section>
       
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">

                <form method="POST" action="{{route('Emessage', ['id'=>$id])}}" id="messageform">
                    @csrf
                    <input type='hidden' value="{{config('app.url')}}" id='url'>
                    <input type='hidden' value="{{$id}}" id='id'>
                  <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Envoyez un message à l'utilisateur {{$nom}} {{$prenom}}</h3>
                </div>
                <div class="box-body">
                  
                  <div class="form-group">
                    <label>Nom et prénom*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <input type="text" name="nom" value="{{$nom}} {{$prenom}}" class="form-control" id="nom"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                  


                  <!-- phone mask -->
                  <div class="form-group">
                    <label>Message*:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                      </div>
                      <textarea id='message' name='message' class="col-md-12" style="height: 150px;"></textarea>
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

                </form>


              
            </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="{{asset('public/admins/message.js')}}"></script>
</body>

</html>