<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Illuminate\Http\Request;

class Verifcode2 extends Component
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
 
     if(Auth::user()->verif2 == $this->code)
     {
         $this->validate();
         $update = User::find(Auth::id());
         $update->etape = 3;
         $update->save();
         User::find(Auth::id())->unreadNotifications->markAsread();
         $request->session()->put('etape2termine', 'true');
         redirect()->route('etape3');
     }
     else
     {
         $this->addError('code', 'code invalide');
     }
         
 
    }

    public function render()
    {
        return view('livewire.verifcode2');
    }
}
