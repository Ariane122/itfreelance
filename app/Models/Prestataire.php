<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestataire extends Model
{
    use SoftDeletes, HasFactory;

    // Enlève l'espace et utilise un tableau pour `guarded`
    protected $guarded = ['created_at', 'updated_at'];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    // Relation avec la catégorie
    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id')->withTrashed();
    }

    // Relation avec les postulations
    public function postulation()
    {
        return $this->hasMany(Postulation::class)->withTrashed();
    }

    // Relation avec les sous-catégories
    public function sousCategories()
    {
        return $this->belongsToMany(SousCategorie::class, 'prestataire_sous_categorie');
    }

    // Relation avec le contrat (vérifier la table pivot si besoin)
    public function contrats()
    {
        return $this->belongsToMany(Contrat::class, 'contrat_prestataires');
    }
}
