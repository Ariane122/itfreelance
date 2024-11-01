<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;
  protected  $guarded = ['created_at' , 'updated_at'] ;


    public function projet () {
        return $this->hasOne(Categorie::class)->withTrashed();
    }

    public function sousCategorie () {
        return $this->hasOne(SousCategorie::class)->withTrashed();
    }

    public function prestataire () {
        return $this->hasOne(Prestataire::class)->withTrashed();
    }

}
