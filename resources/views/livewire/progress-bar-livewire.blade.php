<div>
            <form method="post" wire:submit.prevent="verifcode()">
                                @csrf
                                

                                <label for="text">Code de verification</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" wire:model.lazy='code' class="form-control" placeholder="Code de verification" >
                                       @error('code')
                                       <span class="text-danger">{{$message}}</span>
                                       @enderror
                                    </div>
                                </div>                             
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">verifier</button>
            </form>
</div>