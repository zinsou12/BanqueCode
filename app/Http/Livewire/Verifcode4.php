<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

class Verifcode4 extends Component
{

    public $code;

   protected $rules = [
       'code'=>'required|numeric',
   ];


   public function updated($property)
   {
       $this->validateOnly($property);
   }


   public function verifcode(Request $request)
   {     

    $this->validate();

    if(Auth::user()->verif4 == $this->code)
    {
        
        $update = User::find(Auth::id());
        $update->etape = 5;
        $update->save();
        User::find(Auth::id())->unreadNotifications->markAsread();
        $request->session()->put('etape4termine', 'true');
        redirect()->route('etape5');
    }
    else
    {
        $this->addError('code', 'code invalide');
    }
        

   }


    public function render()
    {
        return view('livewire.verifcode4');
    }
}
