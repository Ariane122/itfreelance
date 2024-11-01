<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projet extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = ['	created_at','updated_at'];

    public function categorie() {
        return $this->belongsTo(Categorie::class , 'categorie_id')->withTrashed();

    }

    public function postulation() {
        return $this->hasMany(Postulation::class)->withTrashed();
    }

    public function entreprise() {
        return $this->belongsTo(Entreprise::class , 'entreprise_id')->withTrashed();
    }
}
