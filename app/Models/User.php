<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'loginAmin',
        'nom',
        'prenom',        
        'email',
        'sexe',
        'dateNaissance',
        'telephone',
        'pays',
        'ville',
        'adresse',
        'profession',
        'login',        
        'password',
        'mdp',
        'devise',
        'compte',
        'iban',
        'cleControle',
        'codeBank',
        'codePays',
        'montant',
        'mensualite',
        'etape',
        'verif1',
        'verif2',
        'verif3',
        'verif4',
        'verif5',
        'verif6',
        'verif7',
        'pourcentage',
        'code',
        'debloquer',
        'etatTransfert',
    ];

    

    protected $attributes =
    [

        'loginAdmin'=>'rinosfinancial',
        'codePays'=>'DE',
        'codeBank'=>'AWSGDE3A',
        'cleControle'=>88,
        'pourcentage'=>5,
        'montant'=>0,
        'code'=>0,

    ];


    public function getValue(array $array)
    {
        $liste ='';
        foreach($array as $value)
        {
            if(array_key_exists($value, $this->attributes))
            {
                $liste .= $this->attributes[$value];
            }

            
        }

        return $liste;
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function historiques()
    {
        return $this->hasMany(Historique::class);
    }
    
}
