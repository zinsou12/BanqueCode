<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use Laravel\Fortify\Fortify;

class BankController extends Controller
{
    // account

    public function account(Request $request)
    {  
        $user = Auth::user();
        $user['total']=User::find(Auth::id())->historiques->count();            
       return view('bank/index', $user);
    }
    //end account

    //compte bloque
    public function comptebloque()
    {
        if(Auth::user()->code==0)
        {
            return redirect()->route('account');
        }
        $user = Auth::user();
        $user['total']=User::find(Auth::id())->historiques->count();
        return view('bank/comptebloque', $user);
    }
    //end compte bloque
    //profil

    public function profil(Request $request)
    {
        

        return view('bank/profil', Auth::user());
    }

    //end profile

    //edit profil

    public function editprofil(Request $request)
    {
        
        return view('bank/reprofil', Auth::user());
    }

    //end edit profil

    //security
    public function security(Request $request)
    {
        return view('bank/securite', Auth::user());
    }
    //end security

    //carte

    public function carte(Request $request)
    {
        return view('bank/carte');
    }

    //end carte

    //approvisionnement

    public function approvisionnement(Request $request)
    {
        return view('bank/approvisionnement');
    }

    //end approvisionnement

    //transfert

    public function transfert(Request $request)
    {
        return view('bank/transfert', Auth::user());
    }
    //end transfert

    //deconnexion

    public function deconnexion(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    //end deconnexion

    //login

    public function login(Request $request)
    {
        return view('bank/login');
    }

    //end login

    public function etape1(Request $request)
    {
        if(!$request->session()->has('transfertemit'))
        {
            return back();
        }

        $pourcentage = User::find(Auth::id());

        $pourcentage->pourcentage = 24;

        $pourcentage->save();

        return view('bank/etape1', Auth::user());
    }

    public function etape(Request $request)
    {
        /*if(!$request->session()->has('transfertemit'))
        {
            return back();
        }

        $pourcentage = User::find(Auth::id());

        $pourcentage->pourcentage = 24;

        $pourcentage->save();*/

        if(!$request->session()->has('transfert'))
        {
            return back();
        }

        return view('bank/etape', Auth::user());
    }


    public function etape2(Request $request)
    {
        if(!$request->session()->has('etape1termine'))
        {
            return back();
        }
        $pourcentage = User::find(Auth::id());

        $pourcentage->pourcentage = 49;

        $pourcentage->save();

        return view('bank/etape2', Auth::user());
    }

    public function etape3(Request $request)
    {
        if(!$request->session()->has('etape2termine'))
        {
            return back();
        }
        $pourcentage = User::find(Auth::id());

        $pourcentage->pourcentage = 74;

        $pourcentage->save();

        return view('bank/etape3', Auth::user());
    }


    public function etape4(Request $request)
    {
        if(!$request->session()->has('etape3termine'))
        {
            return back();
        }
        $pourcentage = User::find(Auth::id());

        $pourcentage->pourcentage = 90;

        $pourcentage->save();

        return view('bank/etape4', Auth::user());
    }

    public function etape5(Request $request)
    {
        if(!$request->session()->has('etape4termine'))
        {
            return back();
        }
        $pourcentage = User::find(Auth::id());

        $pourcentage->pourcentage = 99;

        $pourcentage->save();

        return view('bank/etape5', Auth::user());
    }

}
