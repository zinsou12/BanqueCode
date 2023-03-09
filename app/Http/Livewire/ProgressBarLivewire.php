<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

class ProgressBarLivewire extends Component
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

    if(Auth::user()->verif1 == $this->code)
    {
        $this->validate();
        $update = User::find(Auth::id());
        $update->etape = 2;
        $update->save();
        User::find(Auth::id())->unreadNotifications->markAsread();
        $request->session()->put('etape1termine', 'true');
        redirect()->route('etape2');
    }
    else
    {
        $this->addError('code', 'code invalide');
    }
        

   }



    public function render()
    {
        
        return view('livewire.progress-bar-livewire');
    }
}
