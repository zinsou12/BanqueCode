<div>
    



    
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
              <center>  <h2> Formulaire d'émission de virement en ligne</h2></center>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            
                        </div>
                        <div class="body">
                           
                           <div>
                              Virement en ligne : Le virement en ligne vous permet d’envoyer de l’argent vers un compte domicilié dans n’importe quelle banque. Pour effectuer le virement en ligne, veuillez remplir le formulaire d'émission de virement ci dessous. En cas de difficulté, veuillez prendre contacte avec votre Gestionnaire de compte pour plus d'amples informations. 

                           </div>
                            
                         

                           
                        </div>
                        <div class="body">
                            <form id="form_advanced_validation" method="POST" wire:submit.prevent="Verification">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Montant à transférer</label><br>
                                        <input type="number" wire:model.lazy="montant" class="form-control" name="minmaxlength" maxlength="30" minlength="4" value="{{(int)$montant}}">
                                        
                                        @error('montant')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="help-info">Min. 4, Max. 10 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Nom du bénéficiaire</label><br>
                                        <input type="text" wire:model.lazy="nom" class="form-control" name="minmaxvalue" min="10" max="200">
                                        
                                        @error('nom')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">IBAN</label><br>
                                        <input type="text" wire:model.lazy="iban" class="form-control" name="url" >
                                        @error('iban')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="help-info">iban de votre compte de réception</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Code Swift / BIC</label><br>
                                        <input type="text" wire:model.lazy="swift" class="form-control" name="date" >
                                        @error('swift')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="help-info">Swift / BIC</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Nom de la Banque</label><br>
                                        <input type="text" wire:model.lazy="nom_bank" class="form-control" name="number" >
                                        @error('nom_bank')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="help-info">banque</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <label class="form-label">Raison du virement</label><br>
                                        <input type="text" wire:model.lazy="raison" class="form-control" name="number" >
                                        @error('raison')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="help-info">motif de transfert</div>
                                </div>
                                
                                <button class="btn btn-primary waves-effect" type="submit">envoyer</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
</section>
                           
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  
</div>