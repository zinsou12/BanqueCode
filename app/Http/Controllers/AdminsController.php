<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Historique;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;

use App\Mail\Code;

use App\Notifications\Message;

class AdminsController extends Controller
{
    public function index()
    {
        $transfert = User::where('loginAdmin', 'alphaagroup')
        ->where('etape','>',0)
        ->count();       
        
        $total = User::where('loginAdmin', 'alphaagroup')->count();

        $pourcentage=0;

        if($total>0)
        {
            $pourcentage = ($transfert*100)/$total;
            $pourcentage=round($pourcentage,2);
        }
        

        $terminer = User::where('loginAdmin', 'alphaagroup')
        ->where('etape',9)
        ->count();

        $client =['client'=>User::where('loginAdmin', 'alphaagroup')->get(),
         'total'=>$total, 'transfert'=>$transfert,
        'pourcentage'=>$pourcentage,
    'terminer'=>$terminer];


       
        return view('admins/index', $client);
    }


    public function crediter()
    {
        $clients = User::where('loginAdmin', 'alphaagroup')->get();
        $client = ['client'=>$clients];
        return view('admins/crediter', $client);
    }


    public function select(int $id)
    {
        $client = User::where('loginAdmin', 'alphaagroup')
        ->where('id',$id)->first();
        return view('admins/select', $client);
    }


    public function update(Request $request, $id)
    {
        $data = ['montant'=>$request->montant];
        User::where('loginAdmin', 'alphaagroup')
        ->find($id)
        ->update($data);
        return response()->json(['success'=>'success']);

    }


    public function tencour()
    {
        $liste = User::where('loginAdmin', 'alphaagroup')
        ->where('etape', '>', 0)->get();
        $transfert = User::where('loginAdmin', 'alphaagroup')
        ->where('etape','>',0)
        ->count();       
        
        $total = User::where('loginAdmin', 'alphaagroup')->count();

        $pourcentage = ($transfert*100)/$total;
        $pourcentage=round($pourcentage,2);

        $terminer = User::where('loginAdmin', 'alphaagroup')
        ->where('etape',9)
        ->count();

        $client =['client'=>$liste,
         'total'=>$total, 'transfert'=>$transfert,
        'pourcentage'=>$pourcentage,
    'terminer'=>$terminer]; 
        return view('admins/tencour', $client);
    }


    public function message()
    {
        $clients = User::where('loginAdmin', 'alphaagroup')->get();
        $client = ['client'=>$clients];
        return view('admins/message', $client);
    }


    public function tmessage($id)
    {
        $client = User::where('loginAdmin', 'alphaagroup')
        ->where('id',$id)->first();
        return view('admins/tmessage', $client);
    }


    public function Emessage(Request $request, int $id)
    {
        $client = User::find($id);

        $dataMessage = [

            'message'=>$request->message,

        ];

      $save = $client->notify(new Message($dataMessage));

      if($save===null)
      {
        return response()->json(['success'=>'success', 'save'=>$save]);
      }       
      
    }


    public function modify()
    {
        $clients = User::where('loginAdmin', 'alphaagroup')->get();
        $client = ['client'=>$clients];
        return view('admins/modify', $client);
    }



    public function smodify(int $id)
    {
        $client = User::where('loginAdmin', 'alphaagroup')
        ->where('id',$id)->first();
        return view('admins/smodify', $client);
    }


    public function tmodify(Request $request, int $id)
    {
        $data = [

            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'sexe'=>$request->sexe,
            'dateNaissance'=>$request->date,
            'telephone'=>$request->telephone,
            'pays'=>$request->pays,
            'ville'=>$request->ville,
            'adresse'=>$request->adresse,
            'login'=>$request->login,
            'devise'=>$request->devise,
            'compte'=>$request->compte,
            'iban'=>$request->iban,
            'montant'=>$request->montant,
            'etape'=>$request->etape,
            'verif1'=>$request->verif1,
            'verif2'=>$request->verif2,
            'verif3'=>$request->verif3,
            'verif4'=>$request->verif4,
            'verif5'=>$request->verif5,
            'verif6'=>$request->verif6,
            'verif7'=>$request->verif7,
            'pourcentage'=>$request->pourcentage,
            'code'=>$request->code,
            'debloquer'=>$request->debloquer,

        ];
        $client = User::where('loginAdmin', 'alphaagroup')
        ->where('id', $id)->first();
        $client->update($data);
        return redirect()->back()->with('success', 'modification effectué');
    }


    public function delete(int $id)
    {
        $historique = Historique::where('idclient',$id);
        $historique->delete();
        $client = User::find($id);
        $client->delete();
        return redirect()->back();

    }  

    public function traitementCode(Request $request)
    {
        $code = $request->code;

        if($code !=Auth::user()->code)
        {
            return back()->with('success', 'code incorrect');
        }

        $request->session()->put('code', true);       

        return redirect()->route('listes');
    }    
}