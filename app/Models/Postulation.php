<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postulation extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = ['	created_at','updated_at'];

    public function projet () {
        return $this->belongsTo(Projet::class , 'projet_id')->withTrashed();
    }

    public function prestataire () {
        return $this->belongsTo(Projet::class , 'prestataire_id')->withTrashed();
    }
}
