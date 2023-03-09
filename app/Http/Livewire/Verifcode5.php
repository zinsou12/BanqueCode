<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class Verifcode5 extends Component
{

    public $code;

   protected $rules = [
       'code'=>'required|numeric',
   ];


   public function updated($property)
   {
       $this->validateOnly($property);
   }


   public function verifcode()
   {     

        Auth::user()->verif5 == $this->code ? $this->validate() : $this->addError('code', 'code invalide');
        

   }
    public function render()
    {
        return view('livewire.verifcode5');
    }
}
