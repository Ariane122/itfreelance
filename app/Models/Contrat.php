<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrat extends Model
{
    use SoftDeletes, HasFactory;

    // Enlève l'espace et utilise un tableau pour `guarded`
    protected $guarded = ['created_at', 'updated_at'];

    // Relation avec l'entreprise
    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'entreprise_id')->withTrashed();
    }

    // Relation avec le prestataire
    public function prestataire()
    {
        return $this->belongsTo(Prestataire::class, 'prestataire_id')->withTrashed();
    }

    // Relation avec le projet
    public function projet()
    {
        return $this->belongsTo(Projet::class, 'projet_id')->withTrashed();
    }

    // Relation avec les prestataires (table pivot correcte)
    public function prestataires()
    {
        return $this->belongsToMany(Prestataire::class, 'contrat_prestataires');
    }
}
