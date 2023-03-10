<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Historique;

use Illuminate\Http\Request;

class TransfertLivewire extends Component
{

    public $montant;

    public $nom;

    public $iban;

    public $swift;

    public $nom_bank;

    public $raison;

    protected $rules = [

        

        'montant'=>[
            'required', 'numeric','min:2000',],

        'nom'=>'required|string|min:4',

        'iban'=>'required|alpha_num|min:14|max:34',
        'swift'=>'required|alpha|min:8|max:11',
        'nom_bank'=>'required|string',
        'raison'=>'string',
    ];  

    
    public function mount()
    {
        (int)$this->montant = (int)Auth::user()->montant;

        $this->nom = Auth::user()->nom.' '.Auth::user()->prenom;
    }

    public function updated($propriete)
    {
        $this->validateOnly($propriete);
    }


    public function Verification(Request $request)
    {
        (int)$montant = (int)Auth::user()->montant;

        if($montant >=$this->montant)

                { 
                    $this->validate();
                    

                    $user = User::where('id', Auth::id());

                    
            
                   $user->update(['montant'=>$montant-$this->montant
                ,'pourcentage'=>0,
                'etatTransfert'=>1,
            ]);
            
                    Historique::create(
                        [
                            'montant'=>(int)$this->montant,
                            'nom'=>$this->nom,
                            'iban'=>$this->iban,
                            'swift'=>$this->swift,
                            'nom_bank'=>$this->nom_bank,
                            'raison'=>$this->raison,
                            'user_id'=>Auth::id(),
                        ]
            
                    
                    );
            
                    $this->reset();

                    $request->session()->put('transfert', true);

                    //$request->session()->put('transfertemit', true);

                    //redirect()->route('etape1');

                    redirect()->route('etape');

        }

        else
        {
            $this->addError('montant', 'You have no such amount in your account.');
        }
    }


    public function render()
    {
        return view('livewire.transfert-livewire');
    }
}
