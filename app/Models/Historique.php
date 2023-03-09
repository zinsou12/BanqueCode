<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant','nom', 'iban', 'swift', 'nom_bank', 'raison', 'user_id',
    ];

    protected $attributes = ['statut'=>'En attente...'];
}
