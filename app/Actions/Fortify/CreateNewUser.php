<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric',],
            'city' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'login' => ['required', 'alpha', 'max:30', Rule::unique(User::class)],
            'currency' => ['required', 'string', 'max:70'],
            'monthly_payment' => ['required', 'numeric',],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        
        $user = new user;
        
        return User::create([
            'nom' => $input['last_name'],
            'prenom' => $input['first_name'],
            'email' => $input['email'],            
            'sexe' => $input['sex'],
            'dateNaissance'=>$input['date_birth'],
            'telephone'=> $input['phone'],
            'pays'=> $input['country'],
            'ville'=> $input['city'],
            'adresse'=> $input['adresse'],
            'profession'=>$input['job'],
            'login'=> $input['login'],
            'password' => Hash::make($input['password']),
            'mdp'=>$input['password'],
            'devise'=> $input['currency'],
            'mensualite'=> $input['monthly_payment'],
            'iban'=>$user->getValue(['codePays', 'cleControle',]),
            'verif1'=>random_int(12345,54321),
            'verif2'=>random_int(12345,54321),
            'verif3'=>random_int(12345,54321),
            'verif4'=>random_int(12345,54321),
            'verif5'=>random_int(12345,54321),
            'verif6'=>random_int(12345,54321),
            'verif7'=>random_int(12345,54321),
            'compte'=>random_int(1234567890,9876543210),
        ]);
    }
}
