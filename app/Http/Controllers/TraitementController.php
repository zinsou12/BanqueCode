<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Http\JsonResponse;

use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse as HttpFoundationJsonResponse;

class TraitementController extends Controller
{

    
    // start login

            public function login(Request $request)
            {         

                $secondData = ['email'=>$request->login, 'password'=>$request->password];

                $validator = Validator::make($request->all(), [

                    'login'=>['required', 'min:4',],
                    'password'=>['required', 'min:4'],

                ]);

                if($validator->fails())
                {
                            return Response()->json(['login'=>$validator->errors()->first('login'),
                            'password'=>$validator->errors()->first('password'),
                        
                        ]);
                }


                $user = User::where('loginAdmin', 'efrgruppe')
                
                ->where('login', $request->login)->firstOr( fn()=>
            
            User::where('loginAdmin', 'efrgruppe')->where('email', $request->login)
            ->first()
        );

            if($user === NULL)
            {
                return Response()->json(['login'=>'This user is not registered in our banking institution.', 'password'=>'']);
            }  

            if(!Hash::check($request->password, $user->password))
            {
                return Response()->json(['login'=>'', 'password'=>'Incorrect password or login.']);
            }        

            Auth::login($user);

            $request->session()->regenerate();

        return Response()->json(['login'=>null, 'password'=>null]);

        

    }
    //end login


    //start profil adition

    public function profil(Request $request, int $id)
    {
        $user = User::find($id);
        $user->adresse = $request->adresse;
        $user->telephone = $request->telephone;
        $user->profession = $request->profession;
        $user->save();
        return redirect()->route('profil');
    }

    //end profil adition


    //start password modification

    public function password(Request $request, int $id)
    {
        $validator = Validator::make($request->all(),[

            'mdpactuel'=>[
                
                'required', 'min:4', 'current_password',
            
            ],

            'mdpnouveau'=>[
                
                'required', 'min:4', 'confirmed',
                
            ],

            'mdpnouveau_confirmation'=>[
                'required', 'min:4',
            ],

        ]);

        if($validator->fails())
        {
           
           return back()->withErrors($validator->errors());
        }


        $user = User::find($id);

        $user->password = Hash::make($request->mdpnouveau);

        $user->mpd = $request->mdpnouveau;

        $user->save();

        return back()->with('success', 'mot de passe mis à jour');

      /*  $request->validate([

            'mdpactuel'=>[
                
                'required', 'min:4', 'current_password',
            
            ],

            'mdpnouveau'=>[
                
                'required', 'min:4', 'confirmed',
                
            ],

            'mdpnouveau_confirmation'=>[
                'required', 'min:4',
            ],

        ]);

        $user = User::find($id);

        $user->password = Hash::make($request->mdpnouveau);

        $user->save();

        return back()->with('success', 'mot de passe mis à jour'); */
    }

    //end password modication


    //start read function

    public function read(Request $request)
    {
        $read = User::find(Auth::id())->unreadNotifications;

        $read = $read->find($request->id);

        $read->markAsRead();
        
        return response()->json(['read'=>$read]);
    }
    
    public function compter()
    {
        $compter = User::find(Auth::id())->unreadNotifications->count();
        $notification = User::find(Auth::id())->unreadNotifications;
       return Response()->json(['compter'=>$notification, 'message'=>$compter]);
    }

    /*
    *traitement de etape
    */

    public function etape(Request $request):JsonResponse
    {
        
        

        $validator = Validator::make($request->All(), [
            'codeVerification'=>'required|digits:5|numeric',
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors()->first());
        }

        if(Auth::user()->verif1 == $request->codeVerification)
        {

            $user = User::find(Auth::id());

            

            $user->update(
        [
            'pourcentage'=>$request->nWidth+20,
            'verif1'=>random_int(12345,98745),
        ]);

            return response()->json([
                'width'=>$request->nWidth,
                'max'=>$request->nWidth+20,
                'time'=>1000
               ]);
        }

        return response()->json([
            'errors'=>'Code erronné.',
            'status'=>422
        ]);      
    }   
}