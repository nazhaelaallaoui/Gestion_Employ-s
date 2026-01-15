<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory; // ✅ هذا هو الحل

    protected $fillable = [
        'nom',
        'prenom',
        'salaire',
        'poste',
        'date_embauche'
    ];
}

